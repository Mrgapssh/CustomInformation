           
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; ">
  <meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/blueline/plugins/images/favicon.png">
<title> .::ACODRES</title>



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

  

  


  <div id="page-wrapper">
  
    <div class="container-fluid">

 <?=$yield?>




  
 
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
</div>
<?php if($this->session->flashdata('message')) { $exp = explode(':', $this->session->flashdata('message'))?>


<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?=$exp[0]?>"><?=$exp[1]?></strong> 
</div>

    

    <?php } ?>

<!-- /#wrapper -->
<!-- jQuery -->

</body>
</html>
