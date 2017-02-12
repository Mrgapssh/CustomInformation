<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends MY_Controller {
               
	
	function index()
	{
	  //$sql="ALTER TABLE core ADD facebook VARCHAR( 100 ) NOT NULL , ADD twitter VARCHAR( 100 ) NOT NULL ; ";
	     
	 //   $rows = $this->db->query($sql);
	 
		$this->content_view = 'empresa/all';
	}
function add(){
		 
			$this->theme_view = 'modal';
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
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro Creado Con Exito' );}
			
			
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
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Editar el Registro' );}
       		else{$this->session->set_flashdata('message', 'success: Registro editado con exito' );}
		
			
		} 
			redirect('empresa');
		
	}
	function delete ($id = FALSE){
		$item = Quinessomo::find($id);
		$item->delete();
		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Eliminar' );}
       	else{$this->session->set_flashdata('message', 'success:Eliminado con exito' );}
		redirect('empresa');
	}
	
}