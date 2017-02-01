<?php
class Controller_Admin_Medabaws extends Controller_Admin
{

	public function action_index()
	{
		// search
		$data['pendings'] = Model_Pending::find('all');
		$query['users'] = DB::select()->from('users')->order_by('id', 'desc')->execute();
		// foreach ($query as $key) {
		// 	// var_dump($key);
		// 	echo $key['id'] . "<br>";
		// }
		// die;
		// $data['users'] = DB::select()->order_by('id', 'desc')->execute();
		// $query = DB::query("SELECT * FROM `users` ORDER BY `id` ASC")->param('name', 'value')->execute();
		$search = "";
		if (Input::method() == 'POST')
		{
			$search = Input::post('search');
		}

		$data['users'] = Model_User::find('all', [
			'where' => [
				['hospital_name', 'like', "%$search%"]
			]
		]);
		$this->template->title = ""; 
		$this->template->content = View::forge('admin/medabaws/index', $data);

	}

	public function action_view($id = null)
	{
		$data['roles'] = Model_User::find($id);
		$data['users'] = Model_User::find('all');
		$this->template->title = "";
		$this->template->content = View::forge('admin/medabaws/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');

					if ($val->run())
			{
				$medabaw = Model_User::forge(array(
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

				if ($medabaw and $medabaw->save())
				{
					Session::set_flash('success', e('Added medabaw #'.$medabaw->id.'.'));

					Response::redirect('admin/medabaws');
				}

				else
				{
					Session::set_flash('error', e('Could not save medabaw.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Medabaws";
		$this->template->content = View::forge('admin/medabaws/create');

	}

	public function action_edit($id = null)
	{   

		// send email deactivate
		$user = Model_User::find($id);
			$user->pend = 'not activate';
			// Send Email
				// Create an instance
				$email = Email::forge();
				
				$tmp_email = $user->email; 
				
				// Set the from address
				$email->from('beverly.losoloso@jmc.edu.ph', 'Bebang');

				// Set the to address
				$email->to($tmp_email, 'kim');

				// Set a subject
				$email->subject('This is the subject');

				// Set multiple to addresses

				// $email->to(array(
				//     'example@mail.com',
				//     'another@mail.com' => 'With a Name',
				// ));

				// And set the body.
				$email->body("From: DOH \r\n Sorry you account has been deactivated, Please register again to this link(http://localhost/medabaw2/public/admin/login)");

				    try
				    {
				        $email->send();
				    }
				    catch(\EmailValidationFailedException $e)
				    {
				        echo $e->getMessage();
				        // The validation failed
				    }
				    catch(\EmailSendingFailedException $e)
				    {
				        echo $e;
				        // The driver could not send the email
				    }
			//end Send email

			if ($user->save())
			{
				Session::set_flash('success', e('User Deactivated '));

				Response::redirect('admin/deactivates');
			}
	}

	public function action_delete($id = null)
	{
		if ($medabaw = Model_User::find($id))
		{
			$medabaw->delete();

			Session::set_flash('success', e('Deleted medabaw #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete medabaw #'.$id));
		}

		Response::redirect('admin/medabaws');

	}

}
