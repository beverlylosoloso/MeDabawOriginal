<?php
class Controller_Admin_Pendings extends Controller_Admin
{

	public function action_index()
	{
		$data['pendings'] = Model_Pending::find('all');
		$data['users'] = Model_User::find('all');
		$search = "";
		if (Input::method() == 'POST')
		{
			$search = Input::post('search');
		}

		$data['registereds'] = Model_Registered::find('all', [
			'where' => [
				['name', 'like', "%$search%"]
			]
		]);
		$this->template->title = "";
		$this->template->content = View::forge('admin/pendings/index', $data);

	}

	public function action_view($id = null)
	{
		$data['pending'] = Model_Pending::find($id);
		$this->template->title = "";
		$this->template->content = View::forge('admin/pendings/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Pending::validate('create');

			if ($val->run())
			{
				$pending = Model_Pending::forge(array(
					'hos_name' => Input::post('hos_name'),
					'hos_address' => Input::post('hos_address'),
					'hos_website' => Input::post('hos_website'),
					'email' => Input::post('email'),
					'hos_contact' => Input::post('hos_contact'),
				));

				if ($pending and $pending->save())
				{
					Session::set_flash('success', e('Added pending #'.$pending->id.'.'));

					Response::redirect('admin/pendings');
				}

				else
				{
					Session::set_flash('error', e('Could not save pending.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Pendings";
		$this->template->content = View::forge('admin/pendings/create');

	}

	public function action_edit($id = null)
	{

		// email pag accept
		$user = Model_User::find($id);
		$user->toggle = '1';
		$user->pend = 'activate';

		// Send Email
			// Create an instance
			$email = Email::forge();
			
			$tmp_email = $user->email; 
			var_dump($tmp_email);
			// Set the from address
			$email->from('beverly.losoloso@jmc.edu.ph', 'Bebang');

			// Set the to address
			$email->to($tmp_email, 'kim');

			// Set a subject
			$email->subject('Informing');

			// Set multiple to addresses

			// $email->to(array(
			//     'example@mail.com',
			//     'another@mail.com' => 'With a Name',
			// ));

			// And set the body.
			$email->body("From: DOH - MeDabaw \r\n Congratulations you are now accepted. You may now login to this link: (http://localhost/medabaw2/public/admin/login).");

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
			Session::set_flash('success', e('User Accepted '));

			Response::redirect('admin/pendings');
		}
	}

	public function action_delete($id = null)

	{
		// email pag accept
		$user = Model_User::find($id);

		// Send Email
			// Create an instance
			$email = Email::forge();
			
			$tmp_email = $user->email; 
			var_dump($tmp_email);
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
			$email->body("From: DOH \r\n sorry Something blah.x .  You may now login to this link: (http://localhost/medabaw2/public/admin/login).");

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

		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('ignored user #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete user #'.$id));
		}

		Response::redirect('admin/pendings');

	}

}
