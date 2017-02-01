
 <?php
class Model_Pending extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'hos_name',
		'hos_address',
		'hos_website',
		'email',
		'hos_contact',
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
		$val->add_field('hos_name', 'Hos Name', 'required|max_length[255]');
		$val->add_field('hos_address', 'Hos Address', 'required|max_length[255]');
		$val->add_field('hos_website', 'Hos Website', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('hos_contact', 'Hos Contact', 'required|max_length[20]');

		return $val;
	}

}
