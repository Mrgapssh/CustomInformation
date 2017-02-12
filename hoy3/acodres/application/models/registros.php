<?php

class registros extends ActiveRecord\Model {
	//static $table_name = 'registros';
	  static $belongs_to = array(
         array('clasificacion') 
        );
}
