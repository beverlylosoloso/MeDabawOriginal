
 <?php

class Model_Hospital extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'hospital_name',
		'website',
		'user_id',
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

	protected static $_belongs_to = array(
		'user' => array(
			'model_to' => 'Model_User',
			'key_from' => 'user_id',
			'key_to' => 'id',
			'cascade_delete' => false,
		),
	); 
	

	//protected static $_table_name = 'hospitals';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('hospital_name', 'Hospital Name', 'required|max_length[100]');
		$val->add_field('website', 'Website', 'required|max_length[255]');
		$val->add_field('user_id', 'User ID', 'required|valid_string[numeric]');

		return $val;
	}

}
 	