<?php

class Model_Signing extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'hospitalname',
		'address',
		'website',
		'email',
		'contact',
		'username',
		'password',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'signings';

}
