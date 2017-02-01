<?php
class Model_Registered extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'address',
		'contact',
		'license',
		'chief',
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

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('contact', 'Contact', 'required|max_length[20]');
		$val->add_field('license', 'License', 'required|max_length[255]');
		$val->add_field('chief', 'Chief', 'required|max_length[255]');

		return $val;
	}

}
