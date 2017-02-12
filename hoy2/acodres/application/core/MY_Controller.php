<?php

class My_Controller extends CI_Controller
{
	var $user = FALSE;
	var $client = FALSE;
	var $core_settings = FALSE;
	// Theme functionality
	protected $theme_view = 'application';
	protected $content_view = '';
	protected $view_data = array();
	
	function __construct()
	{
		
		parent::__construct();

		$this->view_data['core_settings'] = Setting::first();
		$this->view_data['datetime'] = date('Y-m-d H:i', time());
		if($this->input->cookie('language') != ""){ $language = $this->input->cookie('language');}else{ if(isset($this->view_data['language'])){$language = $this->view_data['language'];}else{
			if(!empty($this->view_data['core_settings']->language)){$language = $this->view_data['core_settings']->language; }else{ $language = "english"; }
		}}
		$this->lang->load('application', $language);
		$this->lang->load('messages', $language);
		$this->lang->load('event', $language);
		$this->user = $this->session->userdata('user_id') ? User::find_by_id($this->session->userdata('user_id')) : FALSE;
 

		if($this->user || $this->client){

			//check if user or client
			if($this->user){
				$access = $this->user->access;
				$access = explode(",", $access);
				$update = User::find($this->user->id); 
				$email = 'u'.$this->user->id;
				$this->view_data['menu'] = Module::find('all', array('order' => 'sort asc', 'conditions' => array('id in (?) AND type = ?', $access, 'main')));
				$this->view_data['widgets'] = Module::find('all', array('conditions' => array('id in (?) AND type = ?', $access, 'widget')));
				$this->view_data['user_online'] = User::all(array('conditions' => array('last_active+(30 * 60) > ? AND status = ?', time(), "active")));
				 

			} 

			//Update user last active
			$update->last_active = time();
			$update->save();

			 
				
		}

		/*$this->load->database();
		$sql = "select * FROM templates WHERE type='notes'";
		$query = $this->db->query($sql); */
		$this->view_data["note_templates"] = "";//$query->result();
		
	}
	
	public function _output($output)
	{
		// set the default content view
		if($this->content_view !== FALSE && empty($this->content_view)) $this->content_view = $this->router->class . '/' . $this->router->method;
		//render the content view
		$yield = file_exists(APPPATH . 'views/' . $this->view_data['core_settings']->template . '/' . $this->content_view . EXT) ? $this->load->view($this->view_data['core_settings']->template . '/' . $this->content_view, $this->view_data, TRUE) : FALSE;

		//render the theme
		if($this->theme_view)
			echo $this->load->view($this->view_data['core_settings']->template . '/' .'theme/' . $this->theme_view, array('yield' => $yield), TRUE);
		else 
			echo $yield;
		
		echo $output;

		
	}
}
