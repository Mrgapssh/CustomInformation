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
            <div class="panel-heading">CALCULO DE PRESUPUESTO MES</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓN DE ARRENDAMIENTO</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Gasto de arrendamiento " name="arriendo" value="<?php if(isset($user)){echo $user->arrendamiento;} ?>" class="form-control">
                      </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓNN EN SERVICIOS BASICOS</label>
                        <div class="col-md-9">
                          <input type="text"  required  placeholder="Luz,Agua,Gas.." class="form-control" name="servicios" value="<?php if(isset($user)){echo $user->servicios;} ?>"?>
                      </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓN EN BRIGADA DE COCINA</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Inversión en brigada de cocina" class="form-control" name="brigada" value="<?php if(isset($user)){echo $user->brigada;} ?>">
                      </div>
                        </div>


                        <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓN EN BRIGADA DE MESEROS</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Inversión en la atención al cliente" class="form-control" name="meseros" value="<?php if(isset($user)){echo $user->meseros;} ?>">
                      </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓN COSTO DE ALIMENTOS(PRODUCCIÓN)</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Nùmero de cubiertos" class="form-control" name="alimentos" value="<?php if(isset($user)){echo $user->alimentos;} ?>">
                      </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3">INVERSIÓN COSTO DE BEBIDAS(PRODUCCIÓN-COMPRA)</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Nùmero de cubiertos" class="form-control" name="bebidas" value="<?php if(isset($user)){echo $user->bebidas;} ?>">
                      </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-md-3">PROCENTAJE DE UTILIDAD</label>
                        <div class="col-md-9">
                          <input type="text" required placeholder="Indique el procentajeque desea ganar con esta inversión" class="form-control" name="utilidad" value="<?php if(isset($user)){echo $user->utilidad;} ?>">
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
  
     
 
     
     
  
 