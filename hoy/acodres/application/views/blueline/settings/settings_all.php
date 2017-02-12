<div id="row">
	
	

<div class="col-md-12">
<div class="table-head"><?=$this->lang->line('application_settings');?></div>
<?php   
$attributes = array('class' => '', 'id' => 'settings_form');
echo form_open_multipart($form_action, $attributes); 
?>
<div class="table-div">
<br>
 
	<div class="form-group">
		<label><?=$this->lang->line('application_company_name');?></label>
		<input type="text" name="nit" class="required form-control" value="<?=$value->nit;?>" required>
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_contact');?></label>
		<input type="text" name="nombre" class="required form-control" value="<?=$value->nombre;?>" required>
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_address');?></label>
		<input type="text" name="representante" class="required form-control" value="<?=$value->representante;?>" required>
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_city');?></label>
		<input type="text" name="invoice_city" class="required form-control" value="<?=$value->invoice_city;?>" required>
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_phone');?></label>
		<input type="text" name="invoice_tel" class="required form-control" value="<?=$value->invoice_tel;?>" required>
	</div>
		<div class="form-group">
		<label><?=$this->lang->line('application_email');?></label>
		<input type="text" name="email" class="required form-control" value="<?=$value->email;?>" required>
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_domain');?> <button type="button" class="btn-option po pull-right" data-toggle="popover" data-placement="left" data-content="Full URL to your Freelance Cockpit installation. Including subfolder i.e. http://www.yoursite.com/FC/" data-original-title="Domain URL"> <i class="fa fa-info-circle"></i></button>
		</label>
		<input type="text" name="domain" class="required form-control" value="<?=$->domain;?>" required>
			
		
	</div>
	<div class="form-group">
		<label><?=$this->lang->line('application_logo');?> (max 200x200) <button type="button" class="btn-option po pull-right" data-toggle="popover" data-placement="right" data-content="<div class='logo' style='padding:10px'><img src='<?=$core_settings->logo;?>'></div>" data-original-title="<?=$this->lang->line('application_logo');?>"> <i class="fa fa-info-circle"></i></button>
		</label>
		<div class="form-group">
                <div><input id="uploadFile" class="form-control uploadFile" placeholder="Choose File" disabled="disabled" />
                          <div class="fileUpload btn btn-primary">
                              <span><i class="fa fa-upload"></i><span class="hidden-xs"> <?=$this->lang->line('application_select');?></span></span>
                              <input id="uploadBtn" type="file" name="userfile" class="upload" />
                          </div>
            </div>
        </div>
                	
	</div>
 <div class="form-group">
		<label>Facebook</label>
		<input type="text" name="facebook" class="required form-control" value="<?=$settings->facebook;?>" required>
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="twitter" class="required form-control" value="<?=$settings->twitter;?>" required>
	</div>
	 <div class="form-group">
		<label>Descripcion del Sitio</label>
		 <textarea  name="description" class="required form-control" rows="5"><?=$settings->description;?></textarea>
	</div>
	 
	<div class="form-group">
		<label>Palabras claves del Sitio (Separarlas por coma)</label>
		<input type="text"  name="keywords" class="required form-control" value="<?=$settings->keywords;?>" required>
	</div>
	 
	 
		<div class="form-group">
			 <input type="submit" name="send" class="btn btn-primary" value="<?=$this->lang->line('application_save');?>"/>
			
		</div>

	</table>
	
	<?php echo form_close(); ?>
	</div>
	</div>

	</div>
