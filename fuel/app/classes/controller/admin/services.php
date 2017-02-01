<?php
class Controller_Admin_Services extends Controller_Admin
{

	public function action_index()
	{
		$search = "";
		if (Input::method() == 'POST')
		{
			$search = Input::post('search');
		}

		$data['services'] = Model_Service::find('all', [
			'where' => [
				['service_name', 'like', "%$search%"]
			]
		]);
		$this->template->title = "";
		$this->template->content = View::forge('admin/services/index', $data);

	}

	public function action_view($id = null)
	{
		$data['service'] = Model_Service::find($id);

		$this->template->title = "Services";
		$this->template->content = View::forge('admin/services/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Service::validate('create');

			if ($val->run())
			{
				$service = Model_Service::forge(array(
					'hospital_id' => Auth::get('id'),
					'service_name' => Input::post('service_name'),
					'types' => Input::post('types'),
					'doctor' => Input::post('doctor'),
				));

				if ($service and $service->save())
				{
					Session::set_flash('success', e('Added service #'.$service->id.'.'));

					Response::redirect('admin/services');
				}

				else
				{
					Session::set_flash('error', e('Could not save services.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Services";
		$this->template->content = View::forge('admin/services/create');

	}

	public function action_edit($id = null)
	{
		$service = Model_Service::find($id);
		$val = Model_Service::validate('edit');

		if ($val->run())
		{
			$service->service_name = Input::post('service_name');
			$service->types = Input::post('types');
			$service->doctor = Input::post('doctor');
			
			if ($service->save())
			{
				Session::set_flash('success', e('Updated service #' . $id));

				Response::redirect('admin/services');
			}

			else
			{
				Session::set_flash('error', e('Could not update service #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$service->service_name = $val->validated('service_name');
				$service->types = $val->validated('types');
				$service->doctor = $val->validated('doctor');
				

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('service', $service, false);
		}

		$this->template->title = "Services";
		$this->template->content = View::forge('admin/services/edit');

	}

	public function action_delete($id = null)
	{
		if ($service = Model_Service::find($id))
		{
			$service->delete();

			Session::set_flash('success', e('Deleted service #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete service #'.$id));
		}

		Response::redirect('admin/services');

	}

}
