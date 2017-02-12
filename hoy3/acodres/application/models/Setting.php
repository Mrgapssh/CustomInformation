<?php

class Setting extends ActiveRecord\Model {
	static $table_name = 'core';

	static $belongs_to = array(
         array('Empresa')
        );
}
