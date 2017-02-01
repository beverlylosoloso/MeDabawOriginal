<?php

namespace Fuel\Migrations;

class Create_pendings
{
	public function up()
	{
		\DBUtil::create_table('pendings', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'hos_name' => array('constraint' => 255, 'type' => 'varchar'),
			'hos_address' => array('constraint' => 255, 'type' => 'varchar'),
			'hos_website' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'hos_contact' => array('constraint' => 50, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('pendings');
	}
}