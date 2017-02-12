       
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

        <div class="col-sm-12">

          <div class="white-box">
          <ul class="nav navbar-right panel_toolbox">
                        <a href="<?=base_url()?>settings/user_create" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Agregar Usuario</a>
                        </ul>
         
       <div class="row">
            <h3 class="box-title m-b-0">USUARIOS</h3>
            <p class="text-muted m-b-30"></p>

            <div class="table-responsive">


        
                            
                                         
                                         
   <table id="myTable" class="table table-striped">
        <thead>
           <tr class="headings">
      <th ALIGN="center">Nombre de Usuario</th>
      <th ALIGN="center">Nombre Completo</th>
      <th ALIGN="center">Email</th>
      <th ALIGN="center"> Estado</th>
      <th ALIGN="center">Empresa</th>
      <th ALIGN="center">Ultimo Acceso</th>

      <th>Acción</th>
          </tr>
       </thead>

       <tbody>
        <?php foreach ($users as $user):{?>



    <tr id="<?=$user->id;?>" >  
         
        
      <td ALIGN="center"><?=$user->username;?></td>
      <td ALIGN="center"><?php echo $user->firstname." ".$user->lastname;?></td>
      
      <td ALIGN="center"><p class="truncate"><?=$user->email;?></p></td>
      <td ALIGN="center"><span class="label label-<?php if($user->status == "active"){ echo "success"; }else{echo "important";}  $stado['active']='Activo' ; $stado['inactive']='Inactivo' ;  ?>"><?=$stado[$user->status];?></span></td>
      <td ALIGN="center"><?=$user->id_empresa;?></td>
      <td ALIGN="center"><span><?php if(!empty($user->last_login)){ echo date($core_settings->date_format.' '.$core_settings->date_time_format, $user->last_login); } else{echo "-";}?></span></td>
      <td ALIGN="center">
    

           


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
                          
                
 <script src="<?=base_url()?>assets/production/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/jszip.min.js"></script>
        <script src="<?=base_url()?>assets/production/s/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/buttons.print.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/production/js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="<?=base_url()?>assets/production/js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "<?=base_url()?>assets/production/js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
                      </div>
                    </div>
                  </div>
                </div>
