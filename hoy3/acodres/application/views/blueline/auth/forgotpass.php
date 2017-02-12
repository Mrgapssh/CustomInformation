<?php $attributes = array('class' => 'form-signin', 'role'=> 'form', 'id' => 'forgotpass'); ?>
<?=form_open('forgotpass', $attributes)?>
        
        <?php if(isset($message)) { $message = explode(':', $message)?>
            <div class="forgotpass-success">
              <?=$message[1]?>
            </div>
        <?php }else{ ?>
          <div class="forgotpass-info"><?=$this->lang->line('application_identify_account');?></div>
          <?php } ?>
          <div class="form-group">
            <label for="email"><?=$this->lang->line('application_email');?></label>
            <input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" name="email" id="email" placeholder="<?=$this->lang->line('application_email');?>">
          </div>


          <div class="submit three">
            <input type="submit"  value="<?=$this->lang->line('application_reset_password');?>" />
          </div>

          

          <div class="submit three"><a href="<?=site_url("login");?>"><?=$this->lang->line('application_go_to_login');?></a></div>

<?=form_close()?>