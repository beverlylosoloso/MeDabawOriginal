<?php

namespace Fuel\Migrations;

class Create_registereds
{
	public function up()
	{
		\DBUtil::create_table('registereds', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'contact' => array('constraint' => 50, 'type' => 'int'),
			'license' => array('constraint' => 50, 'type' => 'int'),
			'chief' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('registereds');
	}
}