<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$access = FALSE;
		unset($_POST['DataTables_Table_0_length']);
		if($this->client){	
			redirect('cprojects');
		}elseif($this->user){
			foreach ($this->view_data['menu'] as $key => $value) { 
				if($value->link == "settings"){ $access = TRUE;}
			}
			if(!$access){redirect('login');}
		}else{
			redirect('login');
		}
		if(!$this->user->admin) {
			$this->session->set_flashdata('message', 'error:'.$this->lang->line('messages_no_access'));
			redirect('dashboard');
		}
		$this->view_data['submenu'] = array(
				 		$this->lang->line('application_settings') => 'settings',
						$this->lang->line('application_users') => 'settings/users',
						 
				 	 	$this->lang->line('application_backup') => 'settings/backup',
				  
				 		);	
		$this->config->load('defaults');
		$settings = Setting::first();
		$this->load->helper('curl');
	  $object = json_decode($object);
		$this->view_data['update_count'] = FALSE;
		if(isset($object->error)) {
			if($object->error == FALSE && $object->lastupdate > $settings->version){
			$this->view_data['update_count'] = "1";
			}
		}
	}
	
	function index()
	{
		
		$this->view_data['settings'] = Setting::first();
		$this->view_data['form_action'] = 'settings/settings_update';
		$this->content_view = 'settings/settings_all';


	}

	

	function settings_update(){
		if($_POST){

					$config['upload_path'] = './files/media/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '600';
					$config['max_width']  = '300';
					$config['max_height']  = '300';

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
						{
							$error = $this->upload->display_errors('', ' ');
							if($error != "You did not select a file to upload."){
								//$this->session->set_flashdata('message', 'error:'.$error);
						}
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
							$_POST['logo'] = "files/media/".$data['upload_data']['file_name'];
							
						}
					if ( ! $this->upload->do_upload("userfile2"))
						{
							$error = $this->upload->display_errors('', ' ');
							if($error != "You did not select a file to upload."){
								//$this->session->set_flashdata('message', 'error:'.$error);	
						}
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
							$_POST['invoice_logo'] = "files/media/".$data['upload_data']['file_name'];
							
						}
				
		unset($_POST['userfile']);	
		unset($_POST['userfile2']);
		unset($_POST['file-name']);	
		unset($_POST['file-name2']);
		unset($_POST['_wysihtml5_mode']);				
		unset($_POST['send']);
		//if(!isset($_POST['registration'])){$_POST['registration'] = 0;}
		$settings = Setting::first();
		$settings->update_attributes($_POST);
		$this->session->set_flashdata('message', 'success:'.$this->lang->line('messages_save_settings_success'));
 		redirect('settings');
 		}else{
 			$this->session->set_flashdata('message', 'error:'.$this->lang->line('messages_save_settings_error'));
 			redirect('settings');
 		}
	}
	function settings_reset($template = FALSE){
		$this->load->helper('file');
		$settings = Setting::first();
			if($template){
				$data = read_file('./application/views/'.$settings->template.'/templates/default/'.$template.'.html');
				if(write_file('./application/views/'.$settings->template.'/templates/'.$template.'.html', $data)){
					$this->session->set_flashdata('message', 'success:'.$this->lang->line('messages_reset_mail_body_success'));
	 				redirect('settings/templates');
	 			}
			

			}
			
	}
	 
	
	function users()
	{
		$this->view_data['breadcrumb'] = $this->lang->line('application_users');
		$this->view_data['breadcrumb_id'] = "users";
        $this->theme_css = 'Table';
		$this->theme_js = 'Table';
		$options = array('conditions' => array('status != ?', 'deleted'));
		$users = User::all($options);
		$this->view_data['users'] = $users;
		$this->content_view = 'settings/user';
	}

	function user_delete($user = FALSE)
	{
		$user = User::find($user);
		if($this->user != $user) {
		$user->status = 'deleted';
		$user->save();
		$this->session->set_flashdata('message', 'Exito: Registo Eliminado con Exito' );
		}else{
		$this->session->set_flashdata('message', 'error: Problema al eliminar el registro' );
		}
		redirect('settings/users');
	}

	function user_create()
	{
		if($_POST){
				
					$config['upload_path'] = './files/media/';
					$config['encrypt_name'] = TRUE;
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['max_width'] = '180';
					$config['max_height'] = '180';

					$this->load->library('upload', $config);

					if ( $this->upload->do_upload())
						{
							$data = array('upload_data' => $this->upload->data());

							$_POST['userpic'] = $data['upload_data']['file_name'];
						}
				if($_POST['area_id']>199){
				     $_POST['mesaarea_id']=$_POST['area_id'];
				}			
			unset($_POST['file-name']);
			unset($_POST['send']);
			unset($_POST['confirm_password']);
			if(!empty($_POST["access"])){
			$_POST["access"] = implode(",", $_POST["access"]);
			}
			$_POST = array_map('htmlspecialchars', $_POST);
			$user_exists = User::find_by_username($_POST['username']);
			if(empty($user_exists)){
			$user = User::create($_POST);
       		if(!$user){$this->session->set_flashdata('message', 'error:Problemas al crear el Registro');}
       		else{$this->session->set_flashdata('message', 'success: Registro creado con Exito' );}
       		}else{
       			$this->session->set_flashdata('message', 'error: Problemas al crear el Registro' );
       		}
			redirect('settings/users');
		}else
		{
			$this->theme_css = 'Chosen';
		    $this->theme_js = 'Chosen';  
		
			$this->view_data['form_action'] = 'settings/user_create/';
			$this->content_view = 'settings/_userform';
		}
	
	}

	function user_update($user = FALSE){
 		$user = User::find($user);

 		if($_POST){
 			
					$config['upload_path'] = './files/media/';
					$config['encrypt_name'] = TRUE;
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['max_width'] = '180';
					$config['max_height'] = '180';

					$this->load->library('upload', $config);

					if ( $this->upload->do_upload())
						{
							$data = array('upload_data' => $this->upload->data());

							$_POST['userpic'] = $data['upload_data']['file_name'];
						}
				if($_POST['area_id']>199){
				     $_POST['mesaarea_id']=$_POST['area_id'];
				}		
						
					
		unset($_POST['file-name']);
 		unset($_POST['send']);
 		unset($_POST['confirm_password']);
 		if(!empty($_POST["access"])){$_POST["access"] = implode(",", $_POST["access"]);}
 		$_POST = array_map('htmlspecialchars', $_POST);
 		if(empty($_POST['password'])){ unset($_POST['password']);}
 		if($_POST['admin'] == "0" && $_POST['username'] == "Admin"){ $_POST['admin'] = "1";}
 		$user->update_attributes($_POST);
		$this->session->set_flashdata('message', 'Exito:  Registro Editado Con Exito' );
 		redirect('settings/users');
 		}else{
 			$this->view_data['user'] = $user;
			$this->theme_css = 'Chosen';
		    $this->theme_js = 'Chosen'; 
			$this->view_data['form_action'] = 'settings/user_update/'.$user->id;
			$this->content_view = 'settings/_userform';
 		}
 		
	}
	function updates(){
		$this->view_data['breadcrumb'] = $this->lang->line('application_updates');
		$this->view_data['breadcrumb_id'] = "updates";
		$this->view_data['settings'] = Setting::first();
		$this->load->helper('file');
		$this->load->helper('curl');

		$filename = './application/controllers/projects.php';
		if (is_writable($filename)) {
    		$this->view_data['writable'] = "TRUE";
		} else {
		    $this->view_data['writable'] = "FALSE";
		}

		$fileversion = read_file('./application/version.txt');

		if ($fileversion != $this->view_data['settings']->version) {
    		$this->view_data['version_mismatch'] = "TRUE";
		} else {
		    $this->view_data['version_mismatch'] = "FALSE";
		}

		
		
		$this->view_data['downloaded_updates'] = get_filenames('./files/updates/');

		$object = remote_get_contents('http://fc2.luxsys-apps.com/updates/xml.php?code='.$this->view_data['settings']->pc);
		$object = json_decode($object);
		$this->view_data['curl_error'] = FALSE;

		if(isset($object->error)) {
			if($object->error == FALSE){
			$this->view_data['lists'] = $object->updatelist;
			}else{
				$this->view_data['lists'] = array();
				$this->session->set_flashdata('message', 'error: '.$object->error);
			}

		}else{
				$this->view_data['curl_error'] = TRUE;
				$this->view_data['lists'] = array();
			}

		$this->content_view = 'settings/updates';
	}
	function backup(){
		$this->view_data['breadcrumb'] = $this->lang->line('application_backup');
		$this->view_data['breadcrumb_id'] = "backup";
        $this->theme_css = 'Table';
		$this->theme_js = 'Table';
		$this->view_data['settings'] = Setting::first();
		$this->load->helper('file');
		$this->view_data['backups'] = get_filenames('./files/backup/');
		if(!isset($this->view_data['backups'])){$this->session->set_flashdata('message', 'error: Could not check backup folder');}

		$this->content_view = 'settings/backup';
	}
	function logs($val = FALSE){
		$this->view_data['breadcrumb'] = $this->lang->line('application_logs');
		$this->view_data['breadcrumb_id'] = "logs";

		$this->load->helper('file');
		if($val == "clear"){
				delete_files('./application/logs/');		
				$this->session->set_flashdata('message', 'success:'.$this->lang->line('messages_log_cleared'));
	 			redirect('settings/logs');

 		}else{
 		$lognames =	get_filenames('./application/logs/');
 		$lognames = array_diff($lognames, array("index.html"));
 		$this->view_data['logs'] = "";
 		foreach ($lognames as $value) {
 			$this->view_data['logs'] .= read_file('./application/logs/'.$value);
 		}
 		$this->view_data['logs'] = explode("\n", $this->view_data['logs']);
 		$this->view_data['logs'] = array_diff($this->view_data['logs'], array("<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>", ""));
 		rsort($this->view_data['logs']);
 		$this->view_data['settings'] = Setting::first();
		$this->view_data['form_action'] = 'settings/logs';
		$this->content_view = 'settings/logs';
 		}
	}
	
	function mysql_backup(){
		$this->load->helper('file');
		$this->load->dbutil();
		$prefs = array('format' => 'zip', 'filename' => 'Database-full-backup_'.date('Y-m-d_H-i'));

		$backup =& $this->dbutil->backup($prefs); 

		if ( ! write_file('./files/backup/Database-full-backup_'.date('Y-m-d_H-i').'.zip', $backup))
			{
			    $this->session->set_flashdata('message', 'error:'.$this->lang->line('messages_create_backup_error'));
			}
			else
			{ 
				$this->session->set_flashdata('message', 'success:'.$this->lang->line('messages_create_backup_success')); 
			}
 		
 		redirect('settings/backup');
	}
	function mysql_download($file){
		$this->load->helper('file');

		$this->load->helper('download');
		$data = file_get_contents('./files/backup/'.$file);
		force_download($file, $data);
 		
 		redirect('settings/backup');
	}
	function mysql_restore(){
		if($_POST){
		$this->load->helper('file');
		$this->load->helper('unzip');
		$this->load->database();

					$config['upload_path'] = './files/temp/';
					$config['allowed_types'] = 'zip';
					$config['max_size']	= '9000';

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload())
						{
							$error = $this->upload->display_errors('', ' ');
							$this->session->set_flashdata('message', 'error:'.$error);
							redirect('settings/updates');
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
							$backup = "files/temp/".$data['upload_data']['file_name'];
							
						}
				

			if(!unzip($backup, "files/temp/", true, true)){
				$this->session->set_flashdata('message', 'error:'.$this->lang->line('messages_restore_backup_error'));
			}else{
				$this->load->dbforge();
				$backup = str_replace('.zip', '', $backup);
				$file_content =  file_get_contents($backup.".sql");
			 	$this->db->query('USE '.$this->db->database.';');
			 	foreach (explode(";\n", $file_content) as $sql) 
	       {
	         $sql = trim($sql);
	           if($sql) 
	               {
	                $this->db->query($sql);
	               } 
	      } 
			 	$this->session->set_flashdata('message', 'success:'.$this->lang->line('messages_restore_backup_success'));
			 	
	 		}
	 	unlink($backup.".sql");
		unlink($backup.".zip");
	 	redirect('settings/updates');
		}else{
				
			$this->view_data['title'] ='Copia de Seguridad';	
			$this->theme_view = 'modal'; 
			$this->view_data['form_action'] = 'settings/mysql_restore';
			$this->content_view = 'settings/_backup';
		}
	}

}