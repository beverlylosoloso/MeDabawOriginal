<?php
class Controller_Infos extends Controller
{

	public function action_index()
	{
		$data['infos'] = Model_Info::find('all');
		$data['roles'] = Model_Role::find('all');
		try {
			//send email unta
			// Create an instance
			$email = Email::forge();

			// Set the from address
			$email->from('edzel.abliter@jmc.edu.ph', 'My Name');

			// Set the to address
			$email->to('edzel.abliter@jmc.edu.ph', 'me niggas');

			// Set a subject
			$email->subject('This is the subject');

			// Set multiple to addresses

			$email->to(array(
			    'edzel.abliter@jmc.edu.ph',
			    'edzel.abliter@jmc.edu.ph' => 'With a Name',
			));

			// And set the body.
			$email->body('This is my message');
			//end send email
		} catch (Exception $e) {
			echo $e;
		}
		


		$this->template->title = "Infos";
		die;
		$this->template->content = View::forge('infos/index', $data);

	}

	public function action_view($id = null)
	{
		$data['info'] = Model_Info::find($id);

		$this->template->title = "Info";
		$this->template->content = View::forge('infos/view', $data);

	}

//Create new User
	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Info::validate('create');

			if ($val->run())
			{
				$info = Model_Info::forge(array(
					'username' => Input::post('username'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'group' => Input::post('group'),
					'email' => Input::post('email'),
					'contact_number' => Input::post('contact_number'),
					'hospital_name' => Input::post('hospital_name'),
					'address' => Input::post('address'),
					'website' => Input::post('website'),
					'role_id' => Input::post('role_id'),
					
				));

				if ($info and $info->save())
				{
					Session::set_flash('success', e('Added info #'.$info->id.'.'));

					Response::redirect('infos');
				}

				else
				{
					Session::set_flash('error', e('Could not save info.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Infos";
		$this->template->content = View::forge('infos/create');

	}

//end create

	public function action_edit($id = null)
	{
		$info = Model_Info::find($id);
		$val = Model_Info::validate('edit');

		if ($val->run())
		{
			$info->username = Input::post('username');
			$info->password = Auth::instance()->hash_password(Input::post('password'));
			$info->group = Input::post('group');
			$info->email = Input::post('email');
			$info->contact_number = Input::post('contact_number');
			$info->hospital_name = Input::post('hospital_name');
			$info->address = Input::post('address');
			$info->website = Input::post('website');
			$info->role_id = Input::post('role_id');
			

			if ($info->save())
			{
				Session::set_flash('success', e('Updated info #' . $id));

				Response::redirect('infos');
			}

			else
			{
				Session::set_flash('error', e('Could not update info #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$info->username = $val->validated('username');
				$info->password = $val->validated('password');
				$info->group = $val->validated('group');
				$info->email = $val->validated('email');
				$info->contact_number = $val->validated('contact_number');
				$info->hospital_name = $val->validated('hospital_name');
				$info->address = $val->validated('address');
				$info->website = $val->validated('website');
				$info->role_id = Input::post('role_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('info', $info, false);
		}

		$this->template->title = "Infos";
		$this->template->content = View::forge('infos/edit');

	}

	public function action_delete($id = null)
	{
		if ($user = Model_Info::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('Deleted info #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete info #'.$id));
		}

		Response::redirect('infos');

	}

}
