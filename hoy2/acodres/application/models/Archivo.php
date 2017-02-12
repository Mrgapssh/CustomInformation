<?php

class Archivo extends ActiveRecord\Model {
   static $belongs_to = array(
         array('user')  
        );
		
}
