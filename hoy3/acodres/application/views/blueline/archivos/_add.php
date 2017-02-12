



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
            <div class="panel-heading"> SUBIR ARCHIVO</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">EMPRESA</label>
                        <div class="col-md-9">
                                         <?php 
                                unset($options);
                                $options[''] = '-';
                                foreach ($empresas as $value):  
                                $options[$value->id] = $value->nombre;
                                endforeach;
                                                                            ?>
                        <?php 
                        if(isset($rs)){$status = $rs->sede_id;}else{$status = '';}
                        echo form_dropdown('user_id', $options, $status, 'style="width:100%"   class="form-control chosen"');?>
                          
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">NOMBRE</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Nombre archivos " id="nombrearchivo" name="nombre" value="<?php if(isset($rs)){echo $rs[0]->nombrearchivo;} ?>" class="form-control">
                         
                      </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3">ARCHIVO</label>
                         <input id="uploadBtn" type="file" name="userfile" class="upload" />
                      </div>
                      </div>
                    

                      <div class="form-group">
                        <label class="control-label col-md-3">DESCRIPCION</label>
                        <div class="col-md-9">
                          <input id="archivo" name="descripcion" type="text" class="  form-control"  value="" />
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
                          <br>
                        </div>
                      </div>
                    </div>
                 <?php echo form_close(); ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
     