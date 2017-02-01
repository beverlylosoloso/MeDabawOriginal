<?php
class Model_Specialization extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'specialization'
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

	protected static $_belongs_to = array(
		'user' => array(
			'model_to' => 'Model_User',
			'key_from' => 'hospital_id',
			'key_to' => 'id',
			'cascade_delete' => false,
		),
	); 


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('specialization', 'Specialization', 'required|max_length[255]');
		return $val;
	}

}
