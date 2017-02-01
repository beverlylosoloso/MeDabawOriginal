<?php
class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'hospital_name',
		'license',
		'chief',
		'group',
		'email',
		'contact_number',
		'address',
		'hospital_latitude',
		'hospital_longitude',
		'website',
		'image',
		'pend',
		'toggle',
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
			'model_to' => 'Model_Doctor',
			'key_from' => 'id',
			'key_to' => 'hospital_id',
			'cascade_delete' => true,
			'cascade_save' => true,
		),
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[50]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('hospital_name', 'Hospital_name', 'required|max_length[100]');
		$val->add_field('license', 'License', 'required|max_length[100]');
		$val->add_field('chief', 'Chief', 'required|max_length[100]');
		$val->add_field('group', 'Group', 'required|valid_string[numeric]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('contact_number', 'Contact Number', 'required|max_length[20]');
		$val->add_field('address', 'Address', 'max_length[50]');
		$val->add_field('hospital_latitude', 'Hospital Latitude', 'max_length[255]');
		$val->add_field('hospital_longitude', 'Hospital longitude', 'max_length[255]');
		$val->add_field('website', 'Website', 'required|max_length[100]');
		$val->add_field('image', 'Image', 'max_length[255]');
		$val->add_field('pend', 'Pend', 'required|max_length[70]');
		$val->add_field('toggle', 'Toggle', 'valid_string[numeric]');
		$val->add_field('role_id', 'Role ID', 'required|valid_string[numeric]');
		return $val;
	}

}
