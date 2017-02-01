<?php
class Model_Service extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'hospital_id',
		'service_name',
		'types',
		'doctor',
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
		$val->add_field('hospital_id', 'Hospital ID', 'valid_string[numeric]');
		$val->add_field('service_name', 'Service Name', 'required|max_length[255]');
		$val->add_field('types', 'Types', 'required|max_length[255]');
		$val->add_field('doctor', 'Doctor', 'required|max_length[255]');

		return $val;
	}

}
