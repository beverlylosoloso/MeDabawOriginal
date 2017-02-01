<?php
class Model_Info extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'contact_number',
		'address',
		'role_id',
		'created_at',
		'updated_at',
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

	protected static $_has_many = array(
		'hospital' => array(
			'model_to' => 'Model_Hospital',
			'key_from' => 'id',
			'key_to' => 'user_id',
			'cascade_delete' => true,
			'cascade_save' => true,
		),
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[50]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('group', 'Group', 'required|valid_string[numeric]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('contact_number', 'Contact Number', 'required|max_length[20]');
		$val->add_field('address', 'Address', 'required|max_length[50]');
		$val->add_field('role_id', 'Role ID', 'required|valid_string[numeric]');
		return $val;
	}

}
