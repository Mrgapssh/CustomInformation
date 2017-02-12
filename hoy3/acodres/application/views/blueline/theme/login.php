<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>.:: INICIAR SESIÓN</title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>assets/blueline/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=base_url()?>assets/blueline/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=base_url()?>assets/blueline/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=base_url()?>assets/blueline/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">

  <div class="login-box">
  <br>
  <img src="<?=base_url()?>assets/blueline/plugins/images/fronteralab-.png" alt="LOGO" class="light-logo"  style="width: 80%;  " hspace="40px"/>
    <div class="white-box">
   
           <?=$yield?>
      
   
     
    </div>
  </div>
</section>
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
<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>assets/blueline/js/custom.js"></script>
<!--Style Switcher -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
