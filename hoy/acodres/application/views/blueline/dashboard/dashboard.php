<?php

if(isset($update)){
if($this->user->admin == "1" && $update){
 ?>
<div class="newsbox"><a href="<?=base_url()?>settings/updates"><?=$this->lang->line('application_update_available');?> <?=$update?> <i class="fa fa-download"></i> </a></div>
<?php } }?>
<link href="<?=base_url()?>assets/blueline/css/style2.css" rel="stylesheet">

          <div class="row">
            
        
         
            
            <div class="col-xs-12 col-sm-12 col-md-12">
            <?php if(isset($message)){ ?> 
                <div class="stdpad">
                    <h2><?=$this->lang->line('application_recent_messages');?></h2>

                        <ul class="dash-messages">
                            <?php foreach ($message as $value):?>          
                                <li style="display: list-item;">
                                    <a href="<?=base_url()?>messages">
                                      <img class="userpic img-circle" src="
                                        <?php 
                                          if($value->userpic_u){
                                            if($value->userpic_u != 'no-pic.png'){
                                              echo base_url()."files/media/".$value->userpic_u;
                                            }else{
                                              echo get_gravatar($value->email_u);
                                            }
                                            
                                          }else{
                                            if($value->userpic_c != 'no-pic.png'){
                                              echo base_url()."files/media/".$value->userpic_c;
                                            }else{
                                              echo get_gravatar($value->email_c);
                                            }
                                          }
                                          ?>
                                        ">
                                    <h5><?php if(isset($value->sender_u)){echo $value->sender_u;}else{ echo $value->sender_c; } ?> <small><?php echo time_ago($value->time); ?></small></h5>
                                    <p class="truncate" style="width:80%"><span> <?php if($value->status == "New"){ echo '<span class="new"><i class="fa fa-circle-o"></i></span>';}?> <?=$value->subject;?></span></p>
                                    </a>
                                </li>
                            <?php endforeach;?>
                            <?php if(empty($message)) { ?>
                                <li style="padding: 10px 0 0 0; height: 24px;"><?=$this->lang->line('application_no_messages');?></li>
                            <?php } ?>
                        </ul><br/>
                       </div>
            <?php } ?>
            </div>
            
            
        </div>
 




 