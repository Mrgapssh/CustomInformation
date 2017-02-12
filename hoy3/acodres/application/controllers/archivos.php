<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class archivos extends MY_Controller {
               
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		 if($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "archivos"){ $access = TRUE;}
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
			
		if($_POST){
			
			unset($_POST['send']);
			
		 
			 $config['upload_path'] = './files/media/';
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			
			//var_dump($_POST);
			//exit();
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

			//var_dump($_POST);
			//exit();
 			$_POST = array_map('htmlspecialchars', $_POST);
			$item = Archivo::create($_POST);
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro Creado Con Exito' );}
			
			redirect('archivos');
		}else{
			$this->view_data['empresas'] = Empresa::find('all');
		$this->content_view = 'archivos/_add';
		}
		
	}
function add(){
		 
			$this->theme_view = 'modal';
			$this->view_data['emp'] = Empresa::find('all');
			$this->view_data['title'] = 'Gestion de Empresas';
			$this->view_data['form_action'] = 'archivos/save';
			$this->content_view = 'archivos/_add';
	 
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
			$item = Archivo::create($_POST);
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro Creado Con Exito' );}
			
			
		}
		redirect('archivos');
		
		
	}
 function editar($id = FALSE){
		 
			$this->view_data['items'] = Archivo::find($id);
			$this->view_data['empresas'] = User::find('all');
			$this->theme_view = 'modal';
			$this->view_data['title'] = 'Gestion de Empresas';
			$this->view_data['form_action'] = 'archivos/update/'.$id;
			$this->content_view = 'archivos/_edit';
	 
	}
	
	
	function update($id = FALSE){
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
	 
			$item = Archivo::find($id);
			$item = $item->update_attributes($_POST);
       		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Editar el Registro' );}
       		else{$this->session->set_flashdata('message', 'success: Registro editado con exito' );}
		
			
		} 
			redirect('archivos');
		
	}
	function delete ($id = FALSE){
		$item = Archivo::find($id);
		$item->delete();
		if(!$item){$this->session->set_flashdata('message', 'error: Problemas al Eliminar' );}
       	else{$this->session->set_flashdata('message', 'success:Eliminado con exito' );}
		redirect('archivos');
	}
	
}