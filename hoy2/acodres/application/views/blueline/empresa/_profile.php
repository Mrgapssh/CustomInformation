
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">PERFIL DE EMPRESA</h4>
        </div>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">PERFIL EMPRESA</a></li>
          
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <!-- .row -->
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div class="white-box">
            <div class="user-bg"> 
              <div class="overlay-box">
                <div class="user-content"> <a href="javascript:void(0)"><img src="<?=base_url()?>files/media/<?= $value->archivo?>" class="thumb-lg img-circle" alt="img"></a>
                  <h4 class="text-white"><?= $value->nombre ?></h4>
                  <h5 class="text-white"><?= $value->email ?></h5>

                 <a href="<?= $value->facebook?>"> <i class="fa fa-facebook"></i></a>
                 <a href="<?= $value->twitter?>"> <i class="fa fa-twitter"></i></a>
                 <a href="<?= $value->instagram?>"> <i class="fa fa-instagram"></i></a>
                
                </div>
              </div>
            </div>
            <div class="user-btm-box">

              
             
            </div>
          </div>
        </div>
        <div class="col-md-8 col-xs-12">
          <div class="white-box">
            <ul class="nav nav-tabs tabs customtab">
             
              <li class="tab"><a href="#home" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">PERFIL</span> </a> </li>
              
              <li class="tab"><a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">ACTUALIZACION</span> </a> </li>
            </ul>
            <div class="tab-content">
              <div  id="homes">
                <div class="steamline">
                  <div class="sl-item">
                   
                    
                
                 
              
                  
                  </div>
                </div>
              </div>
              <div class="tab-pane active" id="home">
                <div class="row">
                  <div class="col-md-3 col-xs-6 b-r"> <strong>REPRESENTANTE</strong> <br>
                    <p class="text-muted"><?= $value->representante?></p>
                  </div>
                  <div class="col-md-4 col-xs-6 b-r"> <strong>DIRECCION</strong> <br>
                    <p class="text-muted"><?= $value->direccion ?></p>
                  </div>
                  <div class="col-md-3 col-xs-6 "> <strong>TELEFONOS</strong> <br>
                    <p class="text-muted"><?= $value->telefono ?></p>
                  </div>
                    <div class="col-md-3 col-xs-6 "> <strong>HORARIO</strong> <br>
                    <p class="text-muted"><?= $value->horario ?></p>
                  </div>

                  <div class="col-md-3 col-xs-6 "> <strong>CATEGORIA</strong> <br>
                    <p class="text-muted"><?= $value->categoria ?></p>
                  </div>

                  
                  <div class="col-md-3 col-xs-6 "> <strong>EMAIL</strong> <br>
                    <p class="text-muted"><?= $value->email ?></p>
                  </div>
                
                </div>

                <hr>
                DESCRIPCIÓN
                <p class="m-t-30"><?= $value->descripcion ?></p>
               
                
               
              
              
              </div>
              
              <div class="tab-pane" id="settings">
                <form class="form-horizontal form-material">
                  <div class="form-group">
                    <label class="col-md-12">NIT</label>
                    <div class="col-md-12">
          <input type="text" title="Escribe el NIT sin puntos ni guiones"  required pattern="[0-9]{9}" name="nit" value="<?php if(isset($value)){echo $value->nit;} ?>" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-12">NOMBRE</label>
                    <div class="col-md-12">
          <input type="text"    name="nombre" value="<?php if(isset($value)){echo $value->nombre;} ?>" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-12">REPRESENTANTE</label>
                    <div class="col-md-12">
          <input type="text"   required pattern="[A-Za-z]*"  name="representante" value="<?php if(isset($value)){echo $value->representante;} ?>" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                        <label class="col-md-12">TELEFONO</label>
                        <div class="col-md-12">
                          <input type="tel" requiered  class="form-control" name="telefono" value="<?php if(isset($value)){echo $value->telefono;} ?>">
                        </div>
                      </div>
                                        
                    
                      
                      <div class="form-group">
                        <label class="col-md-12">DIRECCIÓN</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control"  requiered name="direccion" value="<?php if(isset($value)){echo $value->direccion;} ?>">
                        </div>
                      </div>
             

                  <div class="form-group">
                    <label class="col-md-12">EMAIL</label>
                    <div class="col-md-12">
                      <input type="email"  class="form-control form-control-line" name="example-email" id="example-email"  value="<?php if(isset($value)){echo $value->email;} ?>" >
                    </div>
                  </div>
                  
                 
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button class="btn btn-success">Actualizar Empresa</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- .right-sidebar -->
      <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
            <ul>
              <li><b>Layout Options</b></li>
              <li>
                <div class="checkbox checkbox-info">
                  <input id="checkbox1" type="checkbox" class="fxhdr">
                  <label for="checkbox1"> Fix Header </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-warning">
                  <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                  <label for="checkbox2"> Fix Sidebar </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-success">
                  <input id="checkbox4" type="checkbox" class="open-close">
                  <label for="checkbox4" > Toggle Sidebar </label>
                </div>
              </li>
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
              <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
              <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
              <li><b>With Dark sidebar</b></li>
              <br/>
              <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

              <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
              <li><b>Chat option</b></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="<?=base_url()?>assets/blueline/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->