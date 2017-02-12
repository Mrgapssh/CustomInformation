

     
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title"><?=$titlemain?></h4>
        </div>
       

      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
       
            <div class="x_panel">
                      
                      <div class="x_content">
            <div class="table-responsive">

           
    
<div id="row">
	
	 


<div class="col-md-12">

		<div class="table-head"><?=$this->lang->line('application_database_backups');?> <span class="pull-right"><a href="mysql_restore" class="btn btn-primary " ><i class="fa fa-upload"></i> <?=$this->lang->line('application_restore_database');?></a> <a href="<?=base_url()?>settings/mysql_backup" class="btn btn-primray"><i class="fa fa-download"></i> <?=$this->lang->line('application_backup_database');?></a></span></div>
		<div class="table-div settings">
		<table id="backup" class="table" cellspacing="0" cellpadding="0">
		<thead>
			<th><?=$this->lang->line('application_date');?></th>
			<th><?=$this->lang->line('application_info');?></th>
			<th><?=$this->lang->line('application_action');?></th>
		</thead>
		<?php if(isset($backups)){
		arsort($backups);
		foreach ($backups as $file):
		 $filename = explode("_", $file);
		?>

		<tr>
			<td><?php echo str_replace('.zip', '', $filename[1]);?> <?php echo str_replace('.zip', '', $filename[2]);?></td>
			<td><?php echo str_replace('-', ' ', $filename[0]);?></td>
			<td class="option" style="width:8%">
				<a class="btn-option tt" href="<?=base_url()?>settings/mysql_download/<?=$file?>" title="<?=$this->lang->line('application_download');?>"><i class="fa fa-download"></i></a>
			</td>
		</tr>

		<?php endforeach; 
		}else{ ?>
		<tr>
			<td colspan="4"><?=$this->lang->line('application_no_backups');?></td>
		</tr> 
		<?php } ?>
	 	</table>
	 	</div>
	 	</div>
	</div>

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












