

<title>GRAFICOS</title>

</head>

<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>

<div id="wrapper">
   <?php  $a=0;$cont=0;$x=0; foreach ($registros as $value): $x++; ?>

          <?php $cont=$cont+($value->bebidas+$value->alimentos);
          $a++;?>


   <?php   endforeach;?> 
  <?php  $y=0; foreach ($psupuesto as $values): $y++; ?>

          <?php $cpa=$cpa+($values->arriendo+$values->servicios+$values->brigada+$values->meseros+$values->alimentos+$values->bebidas);?>


   <?php   endforeach;?> 

  <?php $porcentaje = $cont/$cpa ;
  $cps=$cpa+($cpa*0.50);$falta=0;$percen1=0;$percen2=0;
  $days = date("t");

    if ($cont>$cps) {
      $falta=0;
      $percen1=100;
    }else{
      $falta=$cps-$cont;
      $percen1=porcentaje($cps,$cont,2);
    }

      $diariomes=$cps/$days;
      $diariodia=$cont/$a;

      $cumplimientodia=$diariomes-$diariodia;

 if ($diariodia>$diariomes) {
      $percen2=100;
    }else{
      
      $percen2=porcentaje($diariomes,$diariodia,2);
    }


    function porcentaje($total, $parte, $redondear = 2) {
    return round($parte / $total * 100, $redondear);
}
  


  ?>




      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">GRAFICOS</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb"
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">GRAFICAS</a></li>
            <li class="active">CHEQUE PROMEDIO</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">GRAFICA DE CUMPLIMIENTO</h3>
            <div class="row text-center">
              <div class="col-sm-4">
                <div class="chart easy-pie-chart-1" data-percent="<?php echo $percen1; ?>"> <span class="percent">8/100 </span> </div><h4>CUMPLIMIENTO MES</h4><p><?php print  "Estas cerca tan solo falta : $ ". number_format($falta, 0, '', '.')." PESOS";?></p>
              </div>
              <div class="col-sm-4">
                <div class="chart easy-pie-chart-2" data-percent="<?php echo $percen2; ?>"> <span class="percent">75</span> </div><h4>CUMPLIMIENTO DIARIO</h4><P><?php    if ($diariomes<$diariodia) {
      print "Estas cumpliendo con el objetivo ";
    }else{
      print "Estas cerca de lograrlo solo falta : $ ".number_format($cumplimientodia, 0, '', '.')." PESOS";
    }?></P>
              </div>
              <div class="col-sm-4">
                <div class="easy-pie-chart-3 chart pie-chart" data-percent="<?php print porcentaje($days,$a,2);?>"> <span class="percent">
                <?php print porcentaje($days,$a,2)."%";?></span> </div><h4>DIAS TRANSCURRIDOS DE TRABAJO</h4><p> <span ><?php print "Dias trabajados : " .$a?></span></p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">GRAFICA CHEQUE PROMEDIO</h3>
            <ul class="list-inline text-right">
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>CHEQUE PROMEDIO ALIMENTOS</h5>
              </li>
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>CHEQUE PROMEDIO BEBIDAS</h5>
              </li>
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>CHEQUE PROMEDIO GENERAL</h5>
              </li>
            </ul>
            <div id="morris-area-chart"></div>
          </div>
        </div>

          <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="white-box">
            <h3 class="box-title">GRAFICA VENTA ALIMENTOS</h3>
            <ul class="list-inline text-right">
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>VENTA ALIMENTOS</h5>
              </li>
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>VENTA BEBIDAS</h5>
              </li>
              <li>
                <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>VENTA GENERAL</h5>
              </li>
            </ul>
            <div id="morris-area-chart2"></div>
          </div>
        </div>

      
      
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

</body>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


<script src="<?=base_url()?>assets/blueline/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>






<!--Morris JavaScript -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/morrisjs/morris.js"></script>


<script src="<?=base_url()?>assets/blueline/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>

<!-- Sweet-Alert  -->
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>


<script>
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#example23').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  </script>



<?php $i=0;?>






<script type="text/javascript">
 

  Morris.Area(

{
        element: 'morris-area-chart',
        data: [{
            period: <?php  echo  date("d",strtotime($registros[0]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[0]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[0]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa0=$registros[0]->alimentos/$registros[0]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb0=$registros[0]->bebidas/$registros[0]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general0=$cpa0+$cpb0, 0, '', '.'); ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[1]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[1]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[1]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa1=$registros[1]->alimentos/$registros[1]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb1=$registros[1]->bebidas/$registros[1]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general1=$cpa1+$cpb1, 0, '', '.'); ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[2]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[2]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[2]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa2=$registros[2]->alimentos/$registros[2]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb2=$registros[2]->bebidas/$registros[2]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general2=$cpa2+$cpb2, 0, '', '.'); ?>
        },{
           period: <?php  echo  date("d",strtotime($registros[3]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[3]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[3]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa3=$registros[3]->alimentos/$registros[3]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb3=$registros[3]->bebidas/$registros[3]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general3=$cpa3+$cpb3, 0, '', '.'); ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[4]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[4]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[4]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa4=$registros[4]->alimentos/$registros[4]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb4=$registros[4]->bebidas/$registros[4]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general4=$cpa4+$cpb4, 0, '', '.'); ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[5]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[5]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[5]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa5=$registros[5]->alimentos/$registros[5]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb5=$registros[5]->bebidas/$registros[5]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general5=$cpa5+$cpb5, 0, '', '.'); ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[6]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[6]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[6]->fecha));?>,
            ALIMENTOS:  <?php echo  number_format($cpa6=$registros[6]->alimentos/$registros[6]->cubiertos, 0, '', '.'); ?>,
            BEBIDAS:  <?php echo  number_format($cpb6=$registros[6]->bebidas/$registros[6]->cubiertos, 0, '', '.'); ?>,
            GENERAL: <?php echo number_format($general6=$cpa6+$cpb6, 0, '', '.'); ?>
        }]
       


        ,parseTime: false,
        xkey: 'period',
        ykeys: ['ALIMENTOS', 'BEBIDAS', 'GENERAL'],
        labels: ['ALIMENTOS', 'BEBIDAS', 'GENERAL'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#00bfc7', '#fb9678', '#9675ce'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#00bfc7', '#fb9678', '#9675ce'],
        resize: true
 });


  Morris.Area(

{
        element: 'morris-area-chart2',
        data: [{
            period: <?php  echo  date("d",strtotime($registros[0]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[0]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[0]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa00=$registros[0]->alimentos; ?>,
            BEBIDAS:  <?php echo $cpb00=$registros[0]->bebidas; ?>,
            TOTAL: <?php echo $general00=$cpa00+$cpb00; ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[1]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[1]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[1]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa11=$registros[1]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb11=$registros[1]->bebidas; ?>,
            TOTAL: <?php echo $generalq1=$cpa11+$cpb11; ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[2]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[2]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[2]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa22=$registros[2]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb22=$registros[2]->bebidas; ?>,
            TOTAL: <?php echo $general22=$cpa22+$cpb22; ?>
        },{
           period: <?php  echo  date("d",strtotime($registros[3]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[3]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[3]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa33=$registros[3]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb33=$registros[3]->bebidas; ?>,
            TOTAL: <?php echo $general33=$cpa33+$cpb33; ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[4]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[4]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[4]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa44=$registros[4]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb44=$registros[4]->bebidas; ?>,
            TOTAL: <?php echo $general44=$cpa44+$cpb44; ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[5]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[5]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[5]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa55=$registros[5]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb55=$registros[5]->bebidas; ?>,
            TOTAL: <?php echo $general5=$cpa55+$cpb55; ?>
        },{
            period: <?php  echo  date("d",strtotime($registros[6]->fecha));?>+'-'+<?php  echo  date("m",strtotime($registros[6]->fecha.""));?>+'-'+<?php  echo  date("y",strtotime($registros[6]->fecha));?>,
            ALIMENTOS:  <?php echo  $cpa66=$registros[6]->alimentos; ?>,
            BEBIDAS:  <?php echo  $cpb66=$registros[6]->bebidas; ?>,
            TOTAL: <?php echo $general66=$cpa66+$cpb66; ?>
        }]
       


        ,parseTime: false,
        xkey: 'period',
        ykeys: ['ALIMENTOS', 'BEBIDAS', 'TOTAL'],
        labels: ['ALIMENTOS', 'BEBIDAS', 'TOTAL'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#00bfc7', '#fb9678', '#9675ce'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#00bfc7', '#fb9678', '#9675ce'],
        resize: true
 });

</script>


