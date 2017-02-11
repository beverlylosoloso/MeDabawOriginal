 <?php
class Controller_Admin_Users extends Controller_Admin
{

	public function action_index()
	{
		$search = "";
		if (Input::method() == 'POST')
		{

			$search = Input::post('search');

		}

		$data['users'] = Model_User::find('all', [
			'where' => [
				['username', 'like', "%$search%"]
			]
		]);
		$data['roles'] = Model_Role::find('all');
		$this->template->title = "";
		$this->template->content = View::forge('admin/users/index', $data);

	}
// start json_decode(json)
	public function action_json(){
		$arrjson_result = array();
		
		$data['users'] = DB::select('*')->from('users')->where('pend', 'activate')->as_object()->execute();
		$data['services'] = DB::select('service_name')->from('services')->where('hospital_id','51')->execute();
		

		// var_dump($data['services']);
		// foreach ($data['services'] as $service) {
		// 	echo $service['service_name'];
		// }
		// 	die;
		
		// var_dump($arr_services);die;
		// echo "</br>";
		
		// var_dump($data['users']);
		// $arr = array("bevery","kim","Love");
		// var_dump($arr);
		// die;
		foreach ($data['users'] as $user) {
			$count = 0;
			$arr_services = array();
			$arr_insurances = array();
			$arr_doctors = array();
			$arr_doctors_v2 = array();
			$data['doctors'] = DB::select('*')->from('doctors')->where('hospital_id', $user->id)->execute();
			foreach ($data['doctors'] as $doctor) {
				echo $doctor['name'];

				$arr_doctors = array(
					'name' => $doctor['name'],
					'field' => $doctor['field']				
				);
				// array_push($arr_doctors, $doctor['name']);
				// array_push($arr_doctors, $doctor['field']);
				// foreach ($arr_doctors as $arr_doctor) {
				// 	var_dump($arr_doctor[2]);
				// 	var_dump($arr_doctor);
				// 	die;
				// }

				// $arr_doctors_v2 = array(
				// 	$count++ => array(
				// 		$arr_doctors
				// 	)
				// );
				array_push($arr_doctors_v2, $arr_doctors);
				// $arr_doctors_v2 = array(

				// );
			}
			// var_dump($arr_doctors);die;
			$data['insurances'] = DB::select('*')->from('insurances')->where('hospital_id', $user->id)->execute();
			foreach ($data['insurances'] as $insurance) {
				array_push($arr_insurances, $insurance['insurance_name']);
			}
			
			$data['services'] = DB::select('service_name')->from('services')->where('hospital_id',$user->id)->execute();
			foreach ($data['services'] as $service) {
				array_push($arr_services, $service['service_name']);
			}
				$arrResult = array(
					'username' => $user->username,
					'hospital_name' => $user->hospital_name,
					'license' => $user->license,
					'chief' => $user->chief,
					'email' => $user->email,
					'contact_number' => $user->contact_number,
					'address' => $user->address,
					'hospital_latitude' => $user->hospital_latitude,
					'hospital_longitude' => $user->hospital_longitude,
					'website' => $user->website,
					'image' => $user->image,
					'services' => $arr_services,
					'insurances' => $arr_insurances,
					'doctors' => $arr_doctors_v2,



				);
				if ($arr_insurances == null && $arr_services == null) {
					
				}else{

					array_push($arrjson_result, $arrResult);
				}
		}



		header('Content-Type: application/json');
		return json_encode($arrjson_result);
	}

	public function 	action_postlogin () {
		$errors = [];
		$method = 'POST';
		$success = false;
		if (!Input::post('email')) {
			array_push($errors, 'Please include email');
		}

		if (!Input::post('password')) {
			$errors[] = 'Please include password';
		}

		if (count($errors)) {
			$success = false;
		} else {

			$val = Validation::forge();

			$val->add('email', 'Email or Username')
			    ->add_rule('required');
			$val->add('password', 'Password')
			    ->add_rule('required');

			if ($val->run()) {
				
				
					if (Auth::login(Input::post('email'), Input::post('password'))) {
						$opt = [
							'where' => ['email' => Input::post('email')]
						];
						$data = Model_User::find('first', $opt)->to_array();
						$success = true;
					}
					else
					{
						$errors [] = 'Log in Failed!';
						$success = false;
					}
			}
		}
		header('Content-Type: application/json');
		return json_encode(compact('errors', 'method', 'success', 'data'));
	}

	public function action_insurance_detail ($id) {
		$errors = [];
		$method = 'GET';
		$success = false;

		if($id != 0 && !$id) {
			$success = false;
			$errors [] = "No insurances";
		} else {

			$insurances = Model_Insurance::find('all', [
				'where' => ['hospital_id' => $id]
			]);

			foreach($insurances as $insurance) {
				$data[] = $insurance->to_array();
			}	
			$success = true;
		}
		
		header('Content-Type: application/json');
		return json_encode(compact('errors', 'method', 'success', 'data'));
	}

	public function action_doctor_detail ($id) {

		$errors = [];
		$method = 'GET';
		$success = false;

		if($id != 0 && !$id) {
			$success = false;
			$errors [] = "No doctors";
		} else {

			$doctors = Model_Doctor::find('all', [
				'where' => ['hospital_id' => $id]
			]);

			foreach($doctors as $doctor) {
				$data[] = $doctor->to_array();
			}	
			$success = true;
		}
		
		header('Content-Type: application/json');
		return json_encode(compact('errors', 'method', 'success', 'data'));
	}

	public function action_service_detail ($id) {

		$errors = [];
		$method = 'GET';
		$success = false;

		if($id != 0 && !$id) {
			$success = false;
			$errors [] = "No services";
		} else {

			$services = Model_Service::find('all', [
				'where' => ['hospital_id' => $id]
			]);

			foreach($services as $service) {
				$data[] = $service->to_array();
			}	
			$success = true;
		}


		
		header('Content-Type: application/json');
		return json_encode(compact('errors', 'method', 'success', 'data'));
	}

	// end json

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);
		$this->template->title = "";
		$this->template->content = View::forge('admin/users/view', $data);

	}

//Create new User
	public function action_create()
	{
		if (Input::method() == 'POST')
		{

			$val = Model_User::validate('create');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'username' => Input::post('username'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'hospital_name' => Input::post('hospital_name'),
					'license' => Input::post('license'),
					'chief' => Input::post('chief'),
					'group' => Input::post('group'),
					'email' => Input::post('email'),
					'contact_number' => Input::post('contact_number'),
					'address' => Input::post('address'),
					'website' => Input::post('website'),
					'role_id' => Input::post('role_id'),
					
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', e('Added user #'.$user->hospital_name.'.'));

					Response::redirect('admin/users');
				}

				else
				{
					Session::set_flash('error', e('Could not save user.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/users/create');

	}

//end create

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');

					

		if ($val->run())
		{

			// upload image
					$file_img = null;
					// BEGIN UPLOAD IMAGE
					// Custom configuration for this upload
					$config = array(
					    'path' =>'assets/img',
					    'randomize' => true,
					    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
					);
					// process the uploaded files in $_FILES
					Upload::process($config);

					// if there are any valid files
					if (Upload::is_valid())
					{
					    // save them according to the config
					    Upload::save();
					    // call a model method to update the database
					   
					    $file = Upload::get_files();
					    foreach ($file as $savefile) {
					    	
					    }
					    $file_img = $savefile['saved_as'];
					  
					}
 					
					// and process any errors
					foreach (Upload::get_errors() as $file)
					{
					    // $file is an array with all file information,
					    // $file['errors'] contains an array of all error occurred
					    // each array element is an an array containing 'error' and 'message'
					}
					// END UPLOAD IMAGE


			$user->username = Input::post('username');
			$user->password = Auth::instance()->hash_password(Input::post('password'));
			$user->hospital_name = Input::post('hospital_name');
			$user->license = Input::post('license');
			$user->chief = Input::post('chief');
			$user->group = Input::post('group');
			$user->email = Input::post('email');
			$user->contact_number = Input::post('contact_number');
			$user->address = Input::post('address');
			$user->website = Input::post('website');
			$user->image = $file_img;
			$user->role_id = Input::post('role_id');
			

			if ($user->save())
			{
				Session::set_flash('success', e('You have Successfully Updated your Account'));

				Response::redirect('admin/infos');
			}

			else
			{
				Session::set_flash('error', e('Could not Update your Account'));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->hospital_name = $val->validated('hospital_name');
				$user->license = $val->validated('license');
				$user->chief = $val->validated('chief');
				$user->group = $val->validated('group');
				$user->email = $val->validated('email');
				$user->contact_number = $val->validated('contact_number');
				$user->address = $val->validated('address');
				$user->website = $val->validated('website');
				$user->role_id = Input::post('role_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/users/edit');

	}

	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('Deleted '.$user->hospital_name));
		}

		else
		{
			Session::set_flash('error', e('Could not delete '.$user->hospital_name));
		}

		Response::redirect('admin/users');

	}

}
