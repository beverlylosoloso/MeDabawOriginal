<?php

namespace Fuel\Migrations;

class Create_signups
{
	public function up()
	{
		\DBUtil::create_table('signups', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'hospitalname' => array('constraint' => 250, 'type' => 'varchar'),
			'address' => array('constraint' => 250, 'type' => 'varchar'),
			'website' => array('constraint' => 250, 'type' => 'varchar'),
			'email' => array('constraint' => 250, 'type' => 'varchar'),
			'contact' => array('constraint' => 11, 'type' => 'varchar'),
			'username' => array('constraint' => 250, 'type' => 'varchar'),
			'password' => array('constraint' => 250, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('signups');
	}
}