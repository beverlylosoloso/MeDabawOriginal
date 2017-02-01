<?php
class Model_Insurance extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'hospital_id',
		'insurance_name',
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
		$val->add_field('insurance_name', 'Insurance Name', 'required|max_length[255]');

		return $val;
	}

}
