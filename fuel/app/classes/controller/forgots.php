<?php
class Controller_Forgots extends Controller_Base
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


	public function action_edit($id =null)
	{
		$view = View::forge('admin/forgots/edit');
		$user = Model_User::find($id);
		if (Input::method() == 'POST') {
			$user->password = Auth::instance()->hash_password($_POST['password']);
			

			if ($user->save())
			{
				Session::set_flash('success', e('Password reset successfully'));

				Response::redirect('admin/login');
			}
		}

		



		$this->template->title = "Reset Password";
		$this->template->content = $view;
	}

	public function action_checkemail()
	{
		if (Input::method() == 'POST') {
			
		
		$email = $_POST['email'];

		$user['user'] = Model_User::find('all',[
			'where' => [
				['email', 'like', "$email"]
			]
		]);


		foreach ($user['user'] as $key) {
			
		}
		// die;		
		if (Input::method() == 'POST')
			{
				
			$_POST['email'];

			}
	
			//email start 
			// $user->pend = 'activate';
		
			// Send Email
				// Create an instance
				$email = Email::forge();
				
				$tmp_email = $key->email; 
				
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
				$email->body("From: DOH - MeDabaw \r\n , reset password link(http://localhost/medabaw2/public/forgots/edit/" . $key->id . ")");

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
				}
			//end Send email


		$this->template->title = "";
		$this->template->content = View::forge('admin/forgots/create');

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
