<?php 

class psupuesto extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $access = FALSE;
    if($this->client){  
      redirect('cprojects');
    }elseif($this->user){
      foreach ($this->view_data['menu'] as $key => $value) { 
        if($value->link == "psupuesto"){
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

          function grafico()
  {
        $this->view_data['form_action'] = 'datosdiario/grafico/';
        $this->content_view = 'diario/grafico';
  }
  function index()
  {
        $this->view_data['form_action'] = 'datosdiario/create/';
        $this->content_view = 'diario/agregar';
  }
       function formatos()
  {
 $perfil = perfil_ocupacional::find('all', array('conditions' => array(" id=".$id)));


      $this->load->helper(array('dompdf', 'file')); 
     $this->load->library('parser');
   $data["rows"]  =  $pqr;
   $data["invoice"]='';
   $data["core_settings"] = Setting::first();
   $parse_data = array( );
     $html = $this->load->view(  $this->view_data['core_settings']->template.'/perfil/formato', $data, true); 
   $html = $this->parser->parse_string($html, $parse_data);
     $filename = 'reporte_'.$op;
     pdf_create($html, $filename, TRUE);
  }
  function formato($id)
  {
     $participant = perfil_ocupacional::find('all', array('conditions' => array(" id_perfil=".$id)));


            if($_POST){

                
            unset($_POST['send']);

            $participant[0]->update_attributes($_POST);
            if(!$participant){$this->session->set_flashdata('message', ' Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', ' Presupuesto Mes  Creado con exito' );}
           redirect('mapas/mostrar');
            }else{  


                //$participant = participante::find('all');

              
                $this->view_data['rows'] = $participant;
                $this->view_data['form_action'] = 'perfils/formato/'.$id;
                $this->content_view ='perfil/formato';
       
  }
}

    function create()
  {
   $fechac=date("m");
   $fechab=date("Y");
    $bandera= Presupuesto::find('all', array('conditions' => array(" id_user=".$this->user->id ." and mes ="." ".$fechac ." and year ="." ".$fechab)));
 
    //and fecha_creado >= '".$ano."-".$mes."-".$dia." 00:00:00' AND  fecha_creado <= '".$ano1."-".$mes1."-".$dia1." 23:59:00'";
    
    if (empty($bandera))
    { 
      if($_POST){



         unset($_POST['send']);
             
         $this->view_data['form_action'] = 'psupuesto/create/';
         $_POST['id_user'] = $this->user->id;
         $_POST['mes'] = date("m");
         $_POST['year'] = date("Y");

           $_POST = array_map('htmlspecialchars', $_POST);
           
           $rs = Presupuesto::create($_POST);
             if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
             else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
  
            redirect('psupuesto/mostrar');


               
        }else{
        

          $this->view_data['form_action'] = 'psupuesto/create/';
        $this->content_view = 'presupuestos/agregar';
     }
   }else{

           echo "<script>

swal({   title: 'Buen trabajo!',   text: 'Ya has registrado el presupuesto del este mes ',   type: 'success',   confirmButtonText: 'Ok' });

</script>";
    
           $this->content_view = 'presupuestos/onregistro';
         

   }
         
  }


    function mostrar(){

        // $participant = participante::find('all', array('conditions' => array(" id=".$id)));
            if($_POST){
                
            unset($_POST['send']);
            $participant->update_attributes($_POST);
            if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
           redirect('datosdiario/update');
            }else{  


                $participant = Presupuesto::find('all',array('conditions'=> array("id_user=".$this->user->id)));
                $this->view_data['items'] = $participant;
                $this->view_data['form_action'] = 'psupuesto/update/'.$id;
                $this->content_view ='presupuestos/mostrar';
              }


  
  }


  function informe(){

        // $participant = participante::find('all', array('conditions' => array(" id=".$id)));
            if($_POST){
                
            unset($_POST['send']);
            $participant->update_attributes($_POST);
            if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
           redirect('datosdiario/update');
            }else{  


                $participant = datosdiarios::find('all',array('conditions'=> array("id=".$this->user->id)));
               
                $this->view_data['items'] = $participant;
                $this->view_data['form_action'] = 'datosdiario/update/'.$id;
                $this->content_view ='diario/mostrar';
              }


  
  }


   function certificar(){

        // $participant = participante::find('all', array('conditions' => array(" id=".$id)));
            if($_POST){
                
            unset($_POST['send']);
            $participant->update_attributes($_POST);
            if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
           redirect('participantes/update');
            }else{  


                $participant = participante::find('all');
                $this->view_data['breadcrumb'] ='Participantes';
                $this->view_data['rows'] = $participant;
                $this->view_data['form_action'] = 'participantes/update/'.$id;
                $this->content_view ='participantes/certificar';
              }


  
  }


    function reportes(){

        // $participant = participante::find('all', array('conditions' => array(" id=".$id)));
            if($_POST){
                
            unset($_POST['send']);
            $participant->update_attributes($_POST);
            if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
           redirect('participantes/update');
            }else{  


                $participant = participante::find('all');
                 $this->theme_view ='applicationnn';
                $this->view_data['breadcrumb'] ='Participantes';
                $this->view_data['rows'] = $participant;
                $this->view_data['form_action'] = 'participantes/update/'.$id;
                $this->content_view ='participantes/reportar';
              }


  
  }


   function update($id){

         


            if($_POST){

                
            unset($_POST['send']);

            $participant[0]->update_attributes($_POST);
            if(!$participant){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
           redirect('datosdiario/mostrar');
            }else{  


                //$participant = participante::find('all');

       
   
                $this->view_data['form_action'] = 'datosdiario/update/'.$id;
                $this->content_view ='datosdiario/create';
              }


  
  }







  function view($id = FALSE)
  {
     $participant = mapa::find('all', array('conditions' => array(" id=".$id)));
   

      $this->load->helper(array('dompdf', 'file')); 
      $this->load->library('parser');
        $data["rows"]  =  $participant;
       $data["invoice"]='';
         $data["core_settings"] = Setting::first();
       $parse_data = array( );
      $html = $this->load->view(  $this->view_data['core_settings']->template.'/participantes/reporte1', $data, true); 
      $html = $this->parser->parse_string($html, $parse_data);
      $filename = 'reporte_'.$op;
     pdf_create($html, $filename, TRUE);


  }


}
