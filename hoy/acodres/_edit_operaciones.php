<?php   
$attributes = array('class' => '', 'id' => '_item');
echo form_open($form_action, $attributes); 
?>

  <input name="id"  id="id" type="hidden" value="<?=$items->id?>" />
  <div class="form-group">
        <label for="name"><?=$this->lang->line('application_name');?></label>
        <input id="nombre" name="nombre" type="text" class="required form-control"  value="<?=$items->nombre?>"  required/>
 </div>
 
 
 
 
 

        <div class="modal-footer">
        <input type="submit" name="send" class="btn btn-primary" value="<?=$this->lang->line('application_save');?>"/>
        <a class="btn" data-dismiss="modal"><?=$this->lang->line('application_close');?></a>
        </div>
<?php echo form_close(); ?>