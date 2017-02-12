<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class company extends MY_Controller {
               
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		 if($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "company"){ $access = TRUE;}
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
             
         $this->view_data['form_action'] = 'empresa/_agregar/';
           $_POST = array_map('htmlspecialchars', $_POST);
           $value = Empresa::create($_POST);
           if(!$item){$this->session->set_flashdata('message', 'error: Problemas Al crear el registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro Creado Con Exito' );}
			
            
			
			redirect('company/mostrar');
		}else
		{
			$this->content_view = 'empresa/_agregar';
		}
		
	   
		
		
	}

function mostrar()
	{
	  
	   
		$this->view_data['items'] = Empresa::find('all');
		$this->content_view = 'empresa/all';
	}

		function update_ev($id){
     	 
 		$value = Empresa::find($id);
 		$archivos= Archivo::find('all', array('conditions' => array(" user_id=".$id)));
  		if($_POST){
		            
  		    unset($_POST['send']);
  		    $value->update_attributes($_POST);
            if(!$value){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
       	    else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
		    redirect('empresa/mostrar');
 		}else{
 		
 			$this->view_data['value'] = $value;
 			$this->view_data['archivos'] = $archivos;

  			$this->view_data['title'] ='Editar Eventos';
			$this->view_data['form_action'] = 'company/update_ev/'.$id;
			$this->content_view = 'empresa/_profile';
 		}


 		
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

	function delete($id){
 		$value = Empresa::find($id);
 		    try {
  		        $value->delete();
			    $this->session->set_flashdata('message', 'Exito: Registro eliminado con exito' );
			 }
            catch (Exception $e) {
                    $this->session->set_flashdata('message', 'Error: Problemas al eliminar , Violacion de Integridad ' );  
             }
		     redirect('company/mostrar');
  		
	} 
	
}