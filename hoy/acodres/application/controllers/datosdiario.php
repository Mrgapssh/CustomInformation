<?php 

class datosdiario extends MY_Controller
{

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
            if(!$participant){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
            else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
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
    $fechac=date("Y-m-d");
    $bandera= registros::find('all', array('conditions' => array(" id=".$this->user->id. " ". "and fecha >= '".$fechac." 00:00:00' AND  fecha <= '".$fechac." 23:59:00'" )));

    //and fecha_creado >= '".$ano."-".$mes."-".$dia." 00:00:00' AND  fecha_creado <= '".$ano1."-".$mes1."-".$dia1." 23:59:00'";
    
    if (empty($bandera))
    {
      if($_POST){

         unset($_POST['send']);
             
         $this->view_data['form_action'] = 'datosdiario/create/';
         $_POST['id'] = $this->user->id;

           $_POST = array_map('htmlspecialchars', $_POST);
           $rs = registros::create($_POST);
             if(!$rs){$this->session->set_flashdata('message', 'Error: Problemas al Crear el Registro' );}
             else{$this->session->set_flashdata('message', 'Exito: Registro Creado con exito' );}
  
            redirect('datosdiario/mostrar');


               
        }else{
        

          $this->view_data['form_action'] = 'datosdiario/create/';
        $this->content_view = 'diario/agregar';
     }
   }else{
           $this->content_view = 'diario/onregistro';
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


                $participant = registros::find('all',array('conditions'=> array("id=".$this->user->id)));
                $this->view_data['items'] = $participant;
                $this->view_data['form_action'] = 'datosdiario/update/'.$id;
                $this->content_view ='diario/mostrar';
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
