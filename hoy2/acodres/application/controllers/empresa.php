<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa extends MY_Controller {
               
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		 if($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "empresa"){ $access = TRUE;}
			}
			if(!$access){redirect('login');}
		}else{
			redirect('login');
		}	$this->load->database();
		$this->view_data['submenu'] = array(
				 		$this->lang->line('application_all_items') => 'archivos'
		 	);	
		 
	}	
	function index()
	{
	  //$sql="ALTER TABLE core ADD facebook VARCHAR( 100 ) NOT NULL , ADD twitter VARCHAR( 100 ) NOT NULL ; ";
	     
	 //   $rows = $this->db->query($sql);
	   
		$this->view_data['items'] = Quinessomo::find('all');
		$this->content_view = 'empresa/perfi';
	}


	
function perfi(){
		 
				$this->view_data['items'] = Empresa::find('all');
		$this->content_view = 'empresa/profile';
	 
	}

function add(){
		 
			
			$this->view_data['title'] = $this->lang->line('application_create_item');
			$this->view_data['form_action'] = 'empresa/save';
			$this->content_view = 'empresa/_add';
	 
	}
	
	
	function save(){
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
			$item = Quinessomo::create($_POST);
       		if(!$item){$this->session->set_flashdata('message', ' Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', ' Registro Creado Con Exito' );}
			
			
		}
		redirect('empresa');
		
		
	}
 function editar($id = FALSE){
		 
			$this->view_data['items'] = Quinessomo::find($id);
			$this->theme_view = 'modal';
			$this->view_data['title'] = $this->lang->line('application_edit_item');
			$this->view_data['form_action'] = 'empresa/update';
			$this->content_view = 'empresa/_edit';
	 
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
			$item = Quinessomo::find($id);
			$item = $item->update_attributes($_POST);
       		if(!$item){$this->session->set_flashdata('message', ' Problemas al Editar el Registro' );}
       		else{$this->session->set_flashdata('message', ' Registro actualizado  con exito' );}
		
			
		} 
			redirect('empresa');
		
	}
	function delete ($id = FALSE){
		$item = Quinessomo::find($id);
		$item->delete();
		if(!$item){$this->session->set_flashdata('message', ' Problemas al Eliminar' );}
       	else{$this->session->set_flashdata('message', ' Registro Eliminado con exito' );}
		redirect('empresa');
	}
	
}