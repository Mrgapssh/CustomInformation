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
            <div class="panel-heading">Datos Diarios</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">VENTA TOTAL DE ALIMENTOS</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="alimentos " name="alimentos" value="<?php if(isset($user)){echo $user->alimentos;} ?>" class="form-control">
                      </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3">VENTA TOTAL DE BEBIDAS</label>
                        <div class="col-md-9">
                          <input type="text"  required  placeholder="bebidas" class="form-control" name="bebidas" value="<?php if(isset($user)){echo $user->bebidas;} ?>"?>
                      </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3">CANTIDAD DE CUBIERTOS</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Nùmero de cubiertos" class="form-control" name="cubiertos" value="<?php if(isset($user)){echo $user->cubiertos;} ?>">
                      </div>
                        </div>
                        
                    </div>
                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-offset-3 col-md-9" style="left:300px">
                              <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Registrar</button>
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
  
     
 
     
     
  
 