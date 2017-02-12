<?php   
$attributes = array('class' => '', 'id' => '_item');
echo form_open_multipart($form_action, $attributes); 
?>

  <input name="id"  id="id" type="hidden" value="<?=$items->id?>" />
  <div class="form-group">
        <label for="name"><?=$this->lang->line('application_name');?></label>
        <input id="nombre" name="nombre" type="text" class="required form-control"  value="<?=$items->nombre?>" />
 </div>
 
 
 <div class="form-group">
        <label for="description"><?=$this->lang->line('application_description');?></label>
        <textarea class="input-block-level summernote-modal"  id="contenido" name="contenido"><?=$items->contenido?></textarea>
 </div>
  <div class="form-group">
                <label for="userfile"><?=$this->lang->line('application_attachment');?></label><div>
                <input id="uploadFile" class="form-control uploadFile" placeholder="Choose File" disabled="disabled" />
                          <div class="fileUpload btn btn-primary">
                              <span><i class="fa fa-upload"></i><span class="hidden-xs"> <?=$this->lang->line('application_select');?></span></span>
                              <input id="uploadBtn" type="file" name="userfile" class="upload" />
                          </div>
                  </div>
              </div>
 <div class="form-group">
        <label for="name"><?=$this->lang->line('application_name');?> del archivo</label>
        <input id="nombrearchivo" name="nombrearchivo" type="text" class="  form-control"  value="<?=$items->nombrearchivo?>" />
 </div>
  <div class="form-group">
        <label for="queue">Estado</label>
        <?php $options = array();
                 $options['Activo'] = 'Activo';
                $options['Inactivo'] = 'Inactivo';
                
         echo form_dropdown('estado', $options, $items->estado, 'style="width:100%" class="chosen-select"');?>
</div> 

 

        <div class="modal-footer">
        <input type="submit" name="send" class="btn btn-primary" value="<?=$this->lang->line('application_save');?>"/>
        <a class="btn" data-dismiss="modal"><?=$this->lang->line('application_close');?></a>
        </div>
<?php echo form_close(); ?>