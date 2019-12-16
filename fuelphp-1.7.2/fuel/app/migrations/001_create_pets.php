<?php

namespace Fuel\Migrations;

class Create_pets
{
	public function up()
	{
		\DBUtil::create_table('pets', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'issue_date' => array('type' => 'date'),
			'is_available' => array('type' => 'bool'),
			'info' => array('type' => 'text', 'null' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('pets');
	}
}