<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sliders extends MY_Controller {
               
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		 if($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "sliders"){ $access = TRUE;}
			}
			if(!$access){redirect('login');}
		}else{
			redirect('login');
		}
		$this->view_data['submenu'] = array(
				 		$this->lang->line('application_all_items') => 'sliders'
				 		);	
		
	}	
	function index()
	{
		$this->view_data['items'] = Slider::find('all');
		$this->content_view = 'sliders/all';
	}
function add(){
		 
			$this->theme_view = 'modal';
			$this->view_data['title'] = $this->lang->line('application_create_item');
			$this->view_data['form_action'] = 'sliders/save';
			$this->content_view = 'sliders/_add';
	 
	}
	
	
	function save(){
		if($_POST){
			$config['upload_path'] = './files/media/';
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			
			unset($_POST['send']);
 			if ( ! $this->upload->do_upload())
						{
  						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
 							$_POST['archivo']=$data['upload_data']['file_name'];
						
						}
			unset($_POST['userfile']);
			unset($_POST['file-name']);
			unset($_POST['files']); 
 			$_POST = array_map('htmlspecialchars', $_POST);
			$item = Slider::create($_POST);
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro Creado Con Exito' );}
			
			
		}
		redirect('sliders');
		
		
	}
 function editar($id = FALSE){
		 
			$this->view_data['items'] = Slider::find($id);
			$this->theme_view = 'modal';
			$this->view_data['title'] = $this->lang->line('application_edit_item');
			$this->view_data['form_action'] = 'sliders/update';
			$this->content_view = 'sliders/_edit';
	 
	}
	
	
	function update( ){
		if($_POST){
			unset($_POST['send']);
			$config['upload_path'] = './files/media/';
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			
			unset($_POST['send']);
 			if ( ! $this->upload->do_upload())
						{
  						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
 							$_POST['archivo']=$data['upload_data']['file_name'];
						
						}
			unset($_POST['userfile']);
			unset($_POST['file-name']);
			unset($_POST['files']); 
			$_POST = array_map('htmlspecialchars', $_POST);
			$id = $_POST['id'];
			$item = Slider::find($id);
			$item = $item->update_attributes($_POST);
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Editar el Registro' );}
       		else{$this->session->set_flashdata('message', 'success: Registro editado con exito' );}
		
			
		} 
			redirect('sliders');
		
	}
	function delete ($id = FALSE){
		$item = Slider::find($id);
		$item->delete();
		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Eliminar' );}
       	else{$this->session->set_flashdata('message', 'success:Eliminado con exito' );}
		redirect('sliders');
	}
	
	function attachment($id = FALSE){
		$this->load->helper('download');
		
		$item = Slider::find($id);
		//$data = file_get_contents('./files/media/'.$item->archivo); 
		//var_dump(  $data);
		//exit();
		readfile('./files/media/'.$item->archivo);
		
		//force_download($item->nombrearchivo,'./files/media/'.$item->archivo);
	}
}