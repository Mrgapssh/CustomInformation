
 <! DEBERIA QUEDAR ALGO ASI  SOLAMENTE  PSD: TENGO TODO PUESTO ASI PROBANDO-->
<script>

alert("Ya incluiste el presupuesto de este mes");

window.locationf="<?=base_url()?>";
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Elite Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/blueline/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=base_url()?>assets/blueline/css/animate.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="<?=base_url()?>assets/blueline/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!--alerts CSS -->
<link href="<?=base_url()?>assets/blueline/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/blueline/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=base_url()?>assets/blueline/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="fix-sidebar">
<!-- Preloader -->



<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>


      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Notifications</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Ui Elements</a></li>
            <li class="active">Notifications</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- .row -->
      <div class="row">
        <div class="col-lg-3 col-xs-12">
          <div class="white-box">
          <! LO QUE EJECUTA EL POPUP ES EL ID DEL IMG-->
            <h3 class="box-title">A basic message <small>(Click on image)</small> </h3>
            <img src="<?=base_url()?>assets/blueline/plugins/images/alert.png" alt="alert" class="img-responsive model_img" id="sa-basic"> </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">Title with a text under <small>(Click on image)</small></h3>
            <img src="<?=base_url()?>assets/blueline/plugins/images/alert2.png" alt="alert" class="img-responsive model_img" id="sa-title"> </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">Success Message <small>(Click on image)</small></h3>
            <img src="<?=base_url()?>assets/blueline/plugins/images/alert3.png" alt="alert" class="img-responsive model_img" id="sa-success"> </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">Warning message <small>(Click on image)</small></h3>
            <img src="<?=base_url()?>assets/blueline/plugins/images/alert4.png" alt="alert" class="img-responsive model_img" id="sa-warning"> </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- .row -->
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">A basic message <small>(Click on image)</small></h3>
            <img src="../plugins/images/alert5.png" alt="alert" class="img-responsive model_img" id="sa-params"></div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">Alert with Image <small>(Click on image)</small></h3>
            <img src="../plugins/images/alert7.png" alt="alert" class="img-responsive model_img" id="sa-image"> </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">Alert with time <small>(Click on image)</small></h3>
            <img src="../plugins/images/alert6.png" alt="alert" class="img-responsive model_img" id="sa-close"> </div>
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
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
              <li><a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/blueline/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?=base_url()?>assets/blueline/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/blueline/js/waves.js"></script>
<!-- Sweet-Alert  -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>assets/blueline/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
