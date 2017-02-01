<?php
class Model_Role extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'role_description',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('role_description', 'Role Description', 'required|max_length[255]');

		return $val;
	}

}
