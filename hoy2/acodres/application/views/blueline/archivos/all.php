	<div class="col-sm-12  col-md-12 main">  
     
     <div class="row">
      <a href="<?=base_url()?>archivos/add" class="btn btn-primary" data-toggle="mainmodal">Agregar Items</a>
      <div class="btn-group pull-right-responsive margin-right-3">
          
         
      </div>
    </div>  
      <div class="row">

         <div class="table-head">Gestion Empresas</div>
         <div class="table-div">
		<table class="data table"    cellspacing="0" cellpadding="0">
		<thead>
			<th width="70px" class="hidden-xs">Id</th>
			<th>Empresa</th>
			<th>Archivo</th>
			<th>Fecha</th>
			<?php if($this->user->title=='Administrador'	){ ?><th>Accion</th><?php  } ?>
		</thead>
		<?php foreach ($items as $value):?>
		<tr id="<?=$value->id;?>" >
			<td class="hidden-xs"><?=$value->id;?></td>
			<td><span class="label label-info"><?=$value->user->firstname;?>  <?=$value->user->lastname;?></span></td>
            <td><a target=" black"  href="<?=base_url()?>files/media/<?=$value->archivo;?>" ><?=$value->nombrearchivo ?>  <i class="fa fa-download"></i> </a></td>
            <td> <?=date("d-m-Y ", strtotime ($value->fecha));?>  </td>
			<?php if($this->user->title=='Administrador'	){ ?><td class="option" width="8%">
				        <button type="button" class="btn-option delete po" data-toggle="popover" data-placement="left" data-content="<a class='btn btn-danger po-delete ajax-silent' href='<?=base_url()?>archivos/delete/<?=$value->id;?>'><?=$this->lang->line('application_yes_im_sure');?></a> <button class='btn po-close'><?=$this->lang->line('application_no');?></button> <input type='hidden' name='td-id' class='id' value='<?=$value->id;?>'>" data-original-title="<b><?=$this->lang->line('application_really_delete');?></b>"><i class="fa fa-times"></i></button>
				        <a href="<?=base_url()?>archivos/editar/<?=$value->id;?>" class="btn-option" data-toggle="mainmodal"><i class="fa fa-cog"></i></a>
			</td><?php  } ?>
		</tr>

		<?php endforeach;?>
	 	</table>
            </div>

      </div>
 