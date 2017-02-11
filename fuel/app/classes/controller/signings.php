<?php
class Controller_Signings extends Controller_Base
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$data['roles'] = Model_Role::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('admin/users/index', $data);

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);

		$this->template->title = "User";
		$this->template->content = View::forge('admin/users/view', $data);

	}

//Create new User Original
	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');
			// start overide 
			if ($val->run())
			{
				$bool_check = false;
				$data['users'] = Model_User::find('all');
				foreach ($data['users'] as $user) {
					if ($user->hospital_name == Input::post('hospital_name') && $user->license == Input::post('license')) {
						$bool_check = true;
					}
					// end  overide
				}
				// var_dump($bool_check); die;
				if ($bool_check == true) {
					// upload image
					$file_img = null;
					// BEGIN UPLOAD IMAGE
					// Custom configuration for this upload
					$config = array(
					    'path' =>'assets/img',
					    'randomize' => true,
					    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
					);

					// $width=640;
     //          		$height=480;
					// Image::factory()->load($filepath)->resize($width, $height)->save($filepath);



					// $files = Upload::get_files();

					// foreach( $files  as $key=>$file ) {
					// // getting the full path of the file
					//   $filepath=$file['saved_to'].$file['saved_as'];
					// // if you wanna resize the image for example
		   //             $width=640;
		   //             $height=480;
					  
					// Image::factory()->load($filepath) ->resize($width, $height) ->save($filepath);

					// }
		
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
						$user->hospital_latitude =  Input::post('hospital_latitude');
						$user->hospital_longitude =  Input::post('hospital_longitude');
						$user->pend = Input::post('pend');
						$user->toggle = Input::post('toggle');
						$user->website = Input::post('website');
						$user->image = $file_img;
						$user->role_id = Input::post('role_id');

					if ($user and $user->save())
					{
						Session::set_flash('success', e('Added user #'.$user->id.'.'));

						Response::redirect('admin/users');
					}

					else
					{
						Session::set_flash('error', e('Could not save user.'));
					}
						
				}
				if ($bool_check == false) {


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

					    	// var_dump($savefile);
					    }
					     // $filepath=$savefile['saved_to'].$savefile['saved_as'];
					     // $width=640;
          //      			 $height=480;
  						
  						// Image::factory()->load($file(filename)epath) ->resize($width, $height) ->save($filepath);
					    $file_img = $savefile['saved_as'];
					    // echo $file_img;
					    // Image::load('filename.gif')->preset('mypreset', $filepath);
					}



					// and process any errors
					foreach (Upload::get_errors() as $file)
					{
					    // $file is an array with all file information,
					    // $file['errors'] contains an array of all error occurred
					    // each array element is an an array containing 'error' and 'message'
					}
					// END UPLOAD IMAGE
				
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
						'hospital_latitude' => Input::post('hospital_latitude'),
						'hospital_longitude' => Input::post('hospital_longitude'),
						'pend' => Input::post('pend'),
						'toggle' => Input::post('toggle'),
						'website' => Input::post('website'),
						'image' => $file_img,
						'role_id' => Input::post('role_id'),
						
					));

					if ($user and $user->save())
					{
						Session::set_flash('success', e('Added user #'.$user->id. 'you will recieve an email once you are accepted'));

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
		   }//end bool_check
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/signings/create');

	}

//end create

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');

		if ($val->run())
		{
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
			$user->role_id = Input::post('role_id');

			if ($user->save())
			{
				Session::set_flash('success', e('Updated user #' . $id));

				Response::redirect('admin/users');
			}

			else
			{
				Session::set_flash('error', e('Could not update user #' . $id));
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

		$this->template->title = "Users";
		$this->template->content = View::forge('admin/users/edit');

	}

	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('Deleted user #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete user #'.$id));
		}

		Response::redirect('admin/users');

	}

}
