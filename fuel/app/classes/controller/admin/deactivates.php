<?php
class Controller_Admin_Deactivates extends Controller_Admin
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
				['hospital_name', 'like', "%$search%"]
			]
		]);
		$this->template->title = "";
		$this->template->content = View::forge('admin/deactivates/index', $data);

	}

	public function action_view($id = null)
	{
		$data['deactivate'] = Model_Deactivate::find($id);
		$this->template->title = "";
		$this->template->content = View::forge('admin/deactivates/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Deactivate::validate('create');

			if ($val->run())
			{
				$deactivate = Model_Deactivate::forge(array(
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

				if ($deactivate and $deactivate->save())
				{
					Session::set_flash('success', e('Added deactivate #'.$deactivate->id.'.'));

					Response::redirect('admin/deactivates');
				}

				else
				{
					Session::set_flash('error', e('Could not save deactivate.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/deactivates/create');

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
			$user->pend = 'activate';
			if ($user->save())
			{
				Session::set_flash('success', e('User Activated'));

				Response::redirect('admin/medabaws');
			}
	}

	public function action_delete($id = null)
	{
		if ($deactivate = Model_Deactivate::find($id))
		{
			$deactivate->delete();

			Session::set_flash('success', e('Deleted deactivate #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete deactivate #'.$id));
		}

		Response::redirect('admin/deactivates');

	}

}
