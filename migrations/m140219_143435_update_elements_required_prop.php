<?php

class m140219_143435_update_elements_required_prop extends CDbMigration
{
	public function up()
	{
		$this->update('element_type', array('required' => 1), "class_name = 'Element_OphLeIntravitrealinjection_IntravitrealInjection'");
	}

	public function down()
	{
		$this->update('element_type', array('required' => NULL), "class_name = 'Element_OphLeIntravitrealinjection_IntravitrealInjection'");
	}
}