<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		if($this->client){	
			redirect('cprojects');
		}elseif($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "dashboard"){
					$access = TRUE;
				}
			}
			if(!$access && !empty($this->view_data['menu'][0])){
				redirect($this->view_data['menu'][0]->link);
			}elseif(empty($this->view_data['menu'][0])){
				$this->view_data['error'] = "true";
				$this->session->set_flashdata('message', 'error: You have no access to any modules!');
				redirect('login');
			}
			
		}else{
			redirect('login');
		}

	}
	
	function index()
	{
		$year = date('Y', time());
		$this->view_data["year"] = $year;
		$thismonth = date('m');
		$participant = registros::find('all',array('order' => 'fecha desc','conditions'=> array("id=".$this->user->id)));
        $this->view_data['registros']=$participant;
		$this->view_data["month"] = date('M');
  		$this->content_view = 'dashboard/dashboard';
	}
	 
}
