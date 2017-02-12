 
 

<?php 
/**
 * @file        Application View
 * @author      Ramiro Gomez <caicedo31@lhotmail.com.com>
 * @copyright   By Experto Hosting (http://www.expertohosting.com)
 * @version     2.0.0
 */

$act_uri = $this->uri->segment(1, 0);

$lastsec = $this->uri->total_segments();
$act_uri_submenu = $this->uri->segment($lastsec);
if(!$act_uri){ $act_uri = 'dashboard'; }
if(is_numeric($act_uri_submenu)){ 
    $lastsec = $lastsec-1; 
    $act_uri_submenu = $this->uri->segment($lastsec);
}  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?=$core_settings->empresa;?>  </title>

  <!-- Bootstrap core CSS -->

  <link href="<?=base_url()?>assets/production/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?=base_url()?>assets/production/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/production/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?=base_url()?>assets/production/css/custom.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/production/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?=base_url()?>assets/production/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
             
            <a href="index.html" class="site_title" ><img src="<?=base_url()?><?=$core_settings->logo;?>"  alt="..." >  </a>
          </div>
          <div class="clearfix"></div>
          <hr width="70%">

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">

            
              <img src="<?=base_url()?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>BIENVENIDO</span>
              <h2><?php echo character_limiter($this->user->firstname." ".$this->user->lastname,8);?></h2>
            </div>
            <br>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> GESTION DE PQR<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">PQR PENDIENTES</a>
                    </li>
                    <li><a href="index2.html">PQR SOLUCIONADOS</a>
                    </li>
                    <li><a href="index3.html">PQR REDIRECCIONADOS</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> MESA DE AYUDA <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                   
                    </li>
                    <li><a href="form_advanced.html">TICKETS SOLICITADOS</a>
                    </li>
                    <li><a href="form_validation.html">SOLICITUDES</a>
                    </li>
                  
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> CONFIGURACIONES <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?=site_url('settings')?>">CONFIGURACIONES GENERALES</a>
                    </li>
                    <li><a href="<?=site_url('settings/users')?>">CONFIGURACIONES DE  CUENTA</a>
                    </li>
                   
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> SOPORTE <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?=site_url('settings/pqrs')?>">REPORTE DE PROBLEMAS</a>
                    <li><a href="<?=site_url('settings/backup')?>">COPIA DE SEGURIDAD</a></li>   
                    </li>
                   
                  </ul>
                </li>
               
              </ul>
            </div>
            <div class="menu_section">
              <h3>USUARIOS EN LINEA</h3>

               
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" href="<?=site_url("logout");?>" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?=base_url()?>assets/production/images/img.jpg" alt=""><?php echo character_limiter($this->user->firstname." ".$this->user->lastname,8);?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="<?=site_url("logout");?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?=base_url()?>assets/production/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span><?php echo character_limiter($this->user->firstname." ".$this->user->lastname,8);?></span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?=base_url()?>assets/production/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?=base_url()?>assets/production/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?=base_url()?>assets/production/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        
        
        <?=$yield?>

       
       
       
       
       
        <!-- footer content -->
        <footer>
          <div class="pull-right">
         © <?=date('Y')?> All Rights Reserved. <?=$core_settings->empresa;?> 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  
  
  <script src="<?=base_url()?>assets/production/js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?=base_url()?>assets/production/js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="<?=base_url()?>assets/production/js/icheck/icheck.min.js"></script>

  <script src="<?=base_url()?>assets/production/js/custom.js"></script>

  <!-- pace -->
  <script src="<?=base_url()?>assets/production/js/pace/pace.min.js"></script>

</body>

</html>
