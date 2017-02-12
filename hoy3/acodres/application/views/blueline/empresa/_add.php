



            <div id="main-content">
                

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?=base_url()?>">Inicio</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active"><?=$breadcrumb?></li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                
                    
          <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info">
            <div class="panel-heading"> AGREGAR PACIENTE</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">NOMBRE</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Sistema " id="nombre" name="nombre" value="<?php if(isset($rs)){echo $rs[0]->nombres;} ?>" class="form-control">
                          
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">DESCRIPCION</label>
                        <div class="col-md-9">
                          <textarea  id="contenido" name="contenido"></textarea>
                         
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3">ARCHIVO</label>
                         <input id="uploadBtn" type="file" name="userfile" class="upload" />
                      </div>
                    

                      <div class="form-group">
                        <label class="control-label col-md-3">NOMBRE DEL ARCHIVO</label>
                        <div class="col-md-9">
                          <input id="nombrearchivo" name="nombrearchivo" type="text" class="  form-control"  value="" />
                          </div>
                      </div>
                     
                    
                    
                    </div>
                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Registrar</button>
                              <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 <?php echo form_close(); ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
     
 
     
     
   

