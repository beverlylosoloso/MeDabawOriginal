<?php
class Controller_Admin_Insurances extends Controller_Admin
{

	public function action_index()
	{
		$search = "";
		if (Input::method() == 'POST')
		{
			$search = Input::post('search');
		}

		$data['insurances'] = Model_Insurance::find('all', [
			'where' => [
				['insurance_name', 'like', "%$search%"]
			]
		]);
		$this->template->title = "";
		$this->template->content = View::forge('admin/insurances/index', $data);

	}

	public function action_view($id = null)
	{
		$data['insurance'] = Model_Insurance::find($id);

		$this->template->title = "Insurance";
		$this->template->content = View::forge('admin/insurances/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Insurance::validate('create');

			if ($val->run())
			{
				$insurance = Model_Insurance::forge(array(
					'hospital_id' => Auth::get('id'),
					'insurance_name' => Input::post('insurance_name'),
				));

				if ($insurance and $insurance->save())
				{
					Session::set_flash('success', e('Added '.$insurance->insurance_name.'.'));

					Response::redirect('admin/insurances');
				}

				else
				{
					Session::set_flash('error', e('Could not save insurance.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/insurances/create');

	}

	public function action_edit($id = null)
	{
		$insurance = Model_Insurance::find($id);
		$val = Model_Insurance::validate('edit');

		if ($val->run())
		{
			$insurance->insurance_name = Input::post('insurance_name');

			if ($insurance->save())
			{
				Session::set_flash('success', e('Updated ' . $insurance->insurance_name));

				Response::redirect('admin/insurances');
			}

			else
			{
				Session::set_flash('error', e('Could not update ' . $insurance->insurance_name));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$insurance->insurance_name = $val->validated('insurance_name');
				

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('insurance', $insurance, false);
		}

		$this->template->title = "";
		$this->template->content = View::forge('admin/insurances/edit');

	}

	public function action_delete($id = null)
	{
		if ($insurance = Model_Insurance::find($id))
		{
			$insurance->delete();

			Session::set_flash('success', e('Deleted'.$insurance->insurance_name));
		}

		else
		{
			Session::set_flash('error', e('Could not delete '.$insurance->insurance_name));
		}

		Response::redirect('admin/insurances');

	}

}
