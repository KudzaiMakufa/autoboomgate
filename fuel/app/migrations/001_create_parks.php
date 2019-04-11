<?php

namespace Fuel\Migrations;

class Create_parks
{
	public function up()
	{
		\DBUtil::create_table('parks', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'rfidno' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'clientid' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'points_left' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'isin' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('parks');
	}
}