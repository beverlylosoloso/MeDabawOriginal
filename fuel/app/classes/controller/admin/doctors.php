<?php
class Controller_Admin_Doctors extends Controller_Admin
{

	public function action_index()
	{

		$users ='';
		$search = "";
		if (Input::method() == 'POST')
		{
			$search = Input::post('search');
		}

		$data['doctors'] = Model_Doctor::find('all', [
			'where' => [
				['name', 'like', "%$search%"]
			]
		]);
		$this->template->title = "";
		$this->template->content = View::forge('admin/doctors/index', $data);

	}
// view doctor
	public function action_view($id = null)
	{
		$data['doctor'] = Model_Doctor::find($id);

		$this->template->title = "";
		$this->template->content = View::forge('admin/doctors/view', $data);

	}
// create doctor
	public function action_create()
	{	
		$data['specialization'] = Model_Specialization::find('all');

		if (Input::method() == 'POST')
		{
			$val = Model_Doctor::validate('create');

			if ($val->run())
			{
				$doctor = Model_Doctor::forge(array(
					'hospital_id' => Auth::get('id'),
					'name' => Input::post('name'),
					'field' => Input::post('field'),
					'specialization' => Input::post('specialization'),
				));

				if ($doctor and $doctor->save())
				{
					Session::set_flash('success', e('Added doctor #'.$doctor->id.'.'));

					Response::redirect('admin/doctors');
				}

				else
				{
					Session::set_flash('error', e('Could not save doctor.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$view = View::forge('admin/doctors/create');
		$view->set_global('specialization', Arr::assoc_to_keyval(Model_Specialization::find('all'), 'specialization','specialization'));
		$this->template->title = "Doctors";
		$this->template->content = $view;

	}

public function action_create_specialization()
	{	
		
		if (Input::method() == 'POST')
		{
			$val = Model_Specialization::validate('create');

			if ($val->run())
			{
				$specialization = Model_Specialization::forge(array(
					'specialization' => Input::post('specialization'),
				));

				if ($specialization and $specialization->save())
				{
					Session::set_flash('success', e('Added specialization #'.$specialization->id.'.'));

					Response::redirect('admin/doctors');
				}

				else
				{
					Session::set_flash('error', e('Could not save doctor.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$this->template->title = "Specialization";
		$this->template->content =  View::forge('admin/doctors/add_specialization');;

	}


// edit doctor
	public function action_edit($id = null)
	{
		$doctor = Model_Doctor::find($id);
		$val = Model_Doctor::validate('edit');

		if ($val->run())
		{
			$doctor->name = Input::post('name');
			$doctor->field = Input::post('field');
			$doctor->specialization = Input::post('specialization');

			if ($doctor->save())
			{
				Session::set_flash('success', e('Updated doctor #' . $id));

				Response::redirect('admin/doctors');
			}

			else
			{
				Session::set_flash('error', e('Could not update doctor #' . $id));
			}
		}
		else
		{
			if (Input::method() == 'POST')
			{

			$doctor->name = Input::post('name');
			$doctor->field = Input::post('field');
			$doctor->specialization = Input::post('specialization');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('doctor', $doctor, false);
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/doctors/edit');

	}

// delete doctor
	public function action_delete($id = null)
	{
		if ($doctor = Model_Doctor::find($id))
		{
			$doctor->delete();

			Session::set_flash('success', e('Deleted doctor #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete doctor #'.$id));
		}

		Response::redirect('admin/doctors');

	}

}
