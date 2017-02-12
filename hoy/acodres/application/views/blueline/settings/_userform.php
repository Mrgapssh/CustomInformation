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
            <div class="panel-heading"> AGREGAR USUARIO </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
              <?php   
$attributes = array('class' => 'form-horizontal', 'id' => 'basicForm');
echo form_open_multipart($form_action, $attributes); 
?>
       


                    <div class="form-body">
                      <div class="form-group">
                        <label class="control-label col-md-3">NOMBRE DE USUARIO</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Nombre de usuario " name="username" value="<?php if(isset($user)){echo $user->username;} ?>" class="form-control">
                      </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3">NOMBRES</label>
                        <div class="col-md-9">
                          <input type="text"  required pattern="[a-zA-Z]*" placeholder="nombres" class="form-control" name="firstname" value="<?php if(isset($user)){echo $user->firstname;} ?>"?>
                      </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3">APELLIDOS</label>
                        <div class="col-md-9">
                          <input type="text" required pattern="[a-zA-Z]*" placeholder="apellidos" class="form-control" name="lastname"value="<?php if(isset($user)){echo $user->lastname;} ?>">
                      </div>
                        </div>
                  
                      <div class="form-group">
                        <label class="control-label col-md-3">EMAIL</label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" placeholder="email" name="email"  value="<?php if(isset($user)){echo $user->email;} ?>">
                        </div> 
                      </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3">PASSWORD</label>
                        <div class="col-md-9">
                          <input id="password" type="password" name="password" class="form-control "  min="6" max="25" requiered>
                        </div>
                      </div>
                      .<div class="form-group">
                        <label class="control-label col-md-3">CONFIRMAR PASSWORD</label>
                        <div class="col-md-9">
                      <input id="confirm_password" type="password" name="confirm_password" class="form-control" requiered oninput="check(this)" /> 
                      <script language='javascript' type='text/javascript'>
        function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Las contraseñas no coinciden');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
                       </div>
                      </div>
                       <div class="form-group">
                         <label class="control-label col-md-3">PERFIL </label>
                        <div class="control-label col-md-3">
                                     <?php $options = array(
                                  ''=>'',
                                'Emprendimieto' => 'Emprendimieto',
                                'Coordinacion Operativa'    => 'Coordinacion Operativa',
                                'Area prototipaje' => 'Area prototipaje',
                                'Desarrollo Tecnológico' => 'Desarrollo Tecnológico',
                                'Usuarios' => 'Usuarios'
                               ); ?>

        <?php 
        if(isset($user)){$status = $user->title;}else{$status = '';}
        echo form_dropdown('title', $options, $status, 'style="width:100%" class="form-control chosen"');?>
      </div>
 </div> 
 
<div class="form-group">
      <label class="control-label col-md-3">Estado * </label>
      <div class="control-label col-md-3">
            <?php $options = array(
                                'active'  => 'Activo',
                                'inactive'    => 'Inactivo'
                               ); ?>

        <?php 
        if(isset($user)){$status = $user->status;}else{$status = 'active';}
        echo form_dropdown('status', $options, $status, 'style="width:100%" class="form-control chosen"');?>
      </div>
 </div> 
 <div class="form-group">
      <label class="control-label col-md-3">ADMINISTRADOR* </label>
      <div class="control-label col-md-3">
            
<?php $options = array(   

                               '1'  => 'Si',
                                '0'    => 'No'
                               
                               ); ?>

        <?php 
        if(isset($user)){$admin = $user->admin;}else{$admin = '';}
        echo form_dropdown('admin', $options, $admin, 'style="width:100%" class="form-control chosen"');?>
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
  
     
 
     
     
  
 