<?
 header('Content-type: application/vnd.ms-word');
 header("Content-Disposition: attachment; filename=archivo.doc");
 header("Pragma: no-cache");
 header("Expires: 0");
 
?>
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title m-b-0"><?=$titletable?></h3>
            <p class="text-muted m-b-30"><?=$descrip?></p>
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">
              
                                            <thead >
                                                <tr class="headings" >
                                                  <th><P ALIGN="center">CANTIDAD DE CUBIERTOS</</P></th>
                                                  <th><P ALIGN="center">CHEQUE PROMEDIO</</P></th>
                                                  <th><p align="center">INGRESOS</p></th>
                                                    <th><p align="center">FECHA</p></th>
                        
                                                 </tr>
                                            </thead>

                                           <tbody>
                                          <?php  $x=0; foreach ($items as $value): $x++; ?>
                                          <tr class="table-flag-blue">
                                    
                                     <td ALIGN="center"><?=$value->cantidad_cubiertos;?></td>
                                     <td ALIGN="center"><?=$value->cheque;?></td>
                                     <td ALIGN="center"><?=$value->ingresos;?></td>
                                     <td ALIGN="center"><?=date("d-m-Y",strtotime($value->fecha));?></td>
                     
                                        
                                          
                                               <td class="option" width="8%" align="center">
    

           


 <a onclick="ConfirmDemo()" data-placement="left" data-toggle="popover" data-container="body" class="   popovers" type="button" data-original-title="" title="&iquest;Est&aacute; Seguro?"> <i class="fa fa-trash"></i >    </a>
      
       



<script type="text/javascript">
function ConfirmDemo() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Esta seguro de eliminar esta empresa? ");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
window.location.href ="<?=base_url()?>company/delete/<?=$value->id;?>"
alert("Se ha eliminado la empresa");
}
//Detectamos si el usuario denegó el mensaje
else {
alert("No se ha eliminado la empresa");
}
}
</script>





        <a href="<?=base_url()?>company/update_ev/<?=$value->id;?>" class="btn-option" data-toggle="mainmodal"><i class="fa  fa-edit"></i></a>
      </td>
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




  
