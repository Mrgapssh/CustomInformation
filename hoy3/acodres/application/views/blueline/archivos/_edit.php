<?php   
$attributes = array('class' => '', 'id' => '_item');
echo form_open_multipart($form_action, $attributes); 
?>

  
  <div class="form-group">
        <label for="name">Empresa</label>
          <select name="user_id"   aria-hidden="true" tabindex="-1" id="user_id" class="form-control chosen-select" style="width: 100%"  required>
    	              <option value="">&nbsp;Seleccione...</option>
        	          <?php  $x=0; foreach ($empresas as $rsc): $x++;?>
		                  <option <?php if($rsc->id==$items->user_id){ echo 'selected="selected" ';}?> value="<?=$rsc->id;?>"  ><?=$rsc->firstname;?>  <?=$rsc->lastname;?></option>
		              <?php endforeach;?>
                	  </select> 
         
 </div>
 
 
 <div class="form-group">
        <label for="description"><?=$this->lang->line('application_description');?></label>
        <textarea class="input-block-level summernote-modal"required  id="descripcion" name="descripcion"><?=$items->descripcion?></textarea>
 </div>
 <div class="form-group">
                <label for="userfile"><?=$this->lang->line('application_attachment');?></label><div>
                <input id="uploadFile" class="form-control uploadFile" placeholder="Seleccion Archivo" disabled="disabled" />
                          <div class="fileUpload btn btn-primary">
                              <span><i class="fa fa-upload"></i><span class="hidden-xs"> <?=$this->lang->line('application_select');?></span></span>
                              <input id="uploadBtn" type="file" name="userfile" class="upload"   />
                          </div>
                  </div>
              </div>
 <div class="form-group">
        <label for="name"><?=$this->lang->line('application_name');?> del archivo</label>
        <input id="nombrearchivo" name="nombrearchivo" type="text" class="  form-control"  value="<?=$items->nombrearchivo?>" required/>
 </div>
  

 

        <div class="modal-footer">
        <input type="submit" name="send" class="btn btn-primary" value="<?=$this->lang->line('application_save');?>"/>
        <a class="btn" data-dismiss="modal"><?=$this->lang->line('application_close');?></a>
        </div>
<?php echo form_close(); ?>



 