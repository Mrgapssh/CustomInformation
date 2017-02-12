

     
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title"><?=$titlemain?></h4>
        </div>
       

      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title m-b-0"><?=$titletable?></h3>
            <p class="text-muted m-b-30"><?=$descrip?></p>
            <div class="x_panel">
                      <div class="x_title">
                        <h2>USUARIOS</h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <a href="<?=base_url()?>settings/user_create" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Agregar Usuario</a>
                        
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
            <div class="table-responsive">

            <table id="myTable" class="table table-striped">
              
                                            <thead >
                                                <tr class="headings" >

                                                  <th><P ALIGN="center">NOMBRE COMPLETO</</P></th>
                                                  <th><p align="center">ESTADO</p></th>
                                                  <th><p aling="center" >ULTIMO INICIO DE SESION</p></th>
                 <th>ACCION</th>
                                                 </tr>
                                            </thead>
<tbody>
        <?php foreach ($users as $user):{?>



    <tr id="<?=$user->id;?>" >  
         
        
      <td class="hidden-xs"><?=$user->username;?></td>
      <td><?php echo $user->firstname." ".$user->lastname;?></td>
      
      <td class="hidden-sm hidden-xs hidden-md"><p class="truncate"><?=$user->email;?></p></td>
  
      <td class="hidden-xs"><span class="label label-<?php if($user->status == "active"){ echo "success"; }else{echo "important";}  $stado['active']='Activo' ; $stado['inactive']='Inactivo' ;  ?>"><?=$stado[$user->status];?></span></td>
      <td class="hidden-xs"><?=$user->title;?></td>
      <td class="hidden-xs hidden-md hidden-sm"><span><?php if(!empty($user->last_login)){ echo date($core_settings->date_format.' '.$core_settings->date_time_format, $user->last_login); } else{echo "-";}?></span></td>
      <td class="option" width="8%" align="center">
    

           


 <a onclick="ConfirmDemo()" data-placement="left" data-toggle="popover" data-container="body" class="   popovers" type="button" data-original-title="" title="&iquest;Est&aacute; Seguro?"> <i class="fa fa-trash"></i >    </a>
      
       



<script type="text/javascript">
function ConfirmDemo() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Esta seguro de eliminar el usuario? ");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
window.location.href ="<?=base_url()?>settings/user_delete/<?=$user->id;?>"
alert("Se ha eliminado el usuaio");
}
//Detectamos si el usuario denegó el mensaje
else {
alert("No se ha eliminado el usuario");
}
}
</script>





        <a href="<?=base_url()?>settings/user_update/<?=$user->id;?>" class="btn-option" data-toggle="mainmodal"><i class="fa  fa-edit"></i></a>
      </td>
    </tr>

    <?php } endforeach;?>
        </tbody>




                          </table>

            </div>
          </div>
        </div>


</div>
</div>


<script src="<?=base_url()?>assets/production/js/waves.js"></script>
<script src="<?=base_url()?>assets/production/js/custom.js"></script>
<script src="<?=base_url()?>assets/production/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
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










