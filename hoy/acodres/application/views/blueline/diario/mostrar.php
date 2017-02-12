  
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title"><?=$titlemain?></h4>
        </div>
   

      </div>



<?php if($value->cubiertos==0)
{

  $cpa=$value->alimentos;
  $cpb=$value->bebidas;
}
else
{
      

}
$cpa=$value->bebidas;


?>

      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title m-b-0"><?=$titletable?></h3>
            <p class="text-muted m-b-30"><?=$descrip?></p>
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">
              
                                            <thead >
                                                <tr class="headings" >
                                                  <th><P ALIGN="center">FECHA</</P></th>
                                                  <th><P ALIGN="center">VENTA ALIMENTOS</</P></th>
                                                  <th><p align="center">VENTA BEBIDAS</p></th>
                                                  <th><p align="center">CUBIERTOS</p></th>
                                                  <th><p align="center">CHEQUE PROMEDIO ALIMENTOS</p></th>
                                                  <th><p align="center">CHEQUE PROMEDIO BEBIDAS</p></th>
                                                  <th><p align="center">CHEQUE GENERAL</p></th>

                                                 </tr>
                                            </thead>

                                           <tbody>
                                          <?php  $x=0; foreach ($items as $value): $x++; ?>
                                          <tr class="table-flag-blue">
                                    
                                     <td ALIGN="center"><?=date("d-m-Y",strtotime($value->fecha));?></td>
                                     <td ALIGN="center"><?=number_format($value->alimentos,  0, '', '.');?></td>
                                     <td ALIGN="center"><?=number_format($value->bebidas, 0, '', '.');?></td>
                                     <td ALIGN="center"><?=number_format($value->cubiertos, 0, '', '.');?></td>
                                     <td ALIGN="center"><?php echo number_format($cpa=$value->alimentos/$value->cubiertos, 0, '', '.');   ?></td>
                                     <td ALIGN="center"><?php echo number_format($cpb=$value->bebidas/$value->cubiertos, 0, '', '.'); ?></td> 
                                     <td ALIGN="center"><?php echo number_format($general=$cpa+$cpb, 0, '', '.'); ?></td>
                     
                                        
                                          
                                        
                                            </tr>

             
                                 <?php   endforeach;?> 
                
 
             
                               </tbody>




                          </table>

            </div>
          </div>
        </div>


</div>
</div>


<script src="<?=base_url()?>assets/blueline/js/waves.js"></script>
<script src="<?=base_url()?>assets/blueline/js/custom.js"></script>
<script src="<?=base_url()?>assets/blueline/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<link src="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- end - This is for export functionality only -->

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




  
