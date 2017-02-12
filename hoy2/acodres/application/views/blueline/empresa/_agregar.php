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
            <div class="panel-heading"> AGREGAR EMPRESA</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">NIT</label>
                        <div class="col-md-9">
                          <input type="text" title="Escribe el NIT sin puntos ni guiones"  required  name="nit" value="<?php if(isset($value)){echo $value->nit;} ?>" class="form-control">
                          
                      </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3">NOMBRE</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" required  requiered name="nombre" value="<?php if(isset($value)){echo $value[0]->nombre;} ?>">
                          
                      </div>
                        </div>

                      
                          <div class="form-group">
                        <label class="control-label col-md-3">REPRESENTANTE</label>
                        <div class="col-md-9">
                          <input type="text" required class="form-control" name="representante" value="<?php if(isset($value)){echo $value[0]->representante;} ?>">
                          
                      </div>
                        </div>

                     

                         <div class="form-group">
                        <label class="control-label col-md-3">DESCRIPCION</label>
                        <div class="col-md-9">
                          <textarea  type="text" requiered class="form-control" name="descripcion" value="<?php if(isset($value)){echo $value[0]->descripcion;} ?>"></textarea>
                          
                      </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3">HORARIO</label>
                        <div class="col-md-9">
                           <input type="text" required class="form-control" name="horario" value="<?php if(isset($value)){echo $value[0]->horario;} ?>">
                          
                      </div>
                        </div>
                    
 
                     
                      <div class="form-group">
                        <label class="control-label col-md-3">TELEFONO</label>
                        <div class="col-md-9">
                          <input type="tel" requiered  class="form-control" name="telefono" value="<?php if(isset($value)){echo $value[0]->telefono;} ?>">
                        </div>
                      </div>
                                        
                    
                      
                      <div class="form-group">
                        <label class="control-label col-md-3">DIRECCIÓN</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control"  requiered name="direccion" value="<?php if(isset($value)){echo $value[0]->direccion;} ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">EMAIL</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control"  name="email" value="<?php if(isset($value)){echo $value[0]->email;} ?>">
                        </div> 
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3">IMAGEN CORPORATIVA</label>
                        <div class="col-md-9">
                          <input id="uploadBtn" type="file" name="userfile" class="upload" value="<?php if(isset($value)){echo $value[0]->archivo;} ?>">
                        </div> 
                      </div>



                         <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">CATEGORIA </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php $options = array(
                                ''  => '',
                                '1 Tenedor'  => '1 Tenedor',
                                '2 Tenedores'    => '2 Tenedores',
                                '3 Tenedores'  => '3 Tenedores',
                                '4 Tenedores'    => '4 Tenedores',
                                '5 Tenedores'  => '5 Tenedores',
                               
                               ); ?>
        <?php 
        if(isset($value)){$status = $value[0]->categoria;}else{$status = '';}
        echo form_dropdown('categoria', $options, $status, 'style="width:100%"   class="form-control chosen"');?>

                      </div>
                    </div>

                      <div class="form-group">
                        <label class="control-label col-md-3">FACEBOOK</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control"  name="facebook" placeholder="Coloque aqui el link de su red social " value="<?php if(isset($value)){echo $value[0]->facebook;} ?>">
                        </div> 
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3">Twitter</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control"  name="twitter" placeholder="Coloque aqui el link de su red social " value="<?php if(isset($value)){echo $value[0]->twitter;} ?>">
                        </div> 
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3">Instagram</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control"  name="instagram" placeholder="Coloque aqui el link de su red social " value="<?php if(isset($value)){echo $value[0]->instagram;} ?>">
                        </div> 
                      </div>
                       

                    
                    
                  
                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-offset-3 col-md-9" style="left:300px">
                              <button type="submit" name="send" class="btn btn-success"> <i class="fa fa-check"></i> Registrar</button>
                              <button type="button" class="btn btn-default">Cancel</button>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>

                 <?php echo form_close(); ?>  
                 
                 
              </div>
            </div>
          </div>
        </div>       
        </div>
        </div>
  
     
 
     
     
   