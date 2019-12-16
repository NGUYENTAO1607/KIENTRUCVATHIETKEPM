<?php
class Controller_Pet extends Controller_Template
{

	public function action_index()
	{
		$data['pets'] = Model_Pet::find('all');
		$this->template->title = "Pets";
		$this->template->content = View::forge('pet/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('pet');

		if ( ! $data['pet'] = Model_Pet::find($id))
		{
			Session::set_flash('error', 'Could not find pet #'.$id);
			Response::redirect('pet');
		}

		$this->template->title = "Pet";
		$this->template->content = View::forge('pet/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Pet::validate('create');

			if ($val->run())
			{
				$pet = Model_Pet::forge(array(
					'name' => Input::post('name'),
					'issue_date' => Input::post('issue_date'),
					'is_available' => Input::post('is_available'),
					'info' => Input::post('info'),
				));

				if ($pet and $pet->save())
				{
					Session::set_flash('success', 'Added pet #'.$pet->id.'.');

					Response::redirect('pet');
				}

				else
				{
					Session::set_flash('error', 'Could not save pet.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Pets";
		$this->template->content = View::forge('pet/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('pet');

		if ( ! $pet = Model_Pet::find($id))
		{
			Session::set_flash('error', 'Could not find pet #'.$id);
			Response::redirect('pet');
		}

		$val = Model_Pet::validate('edit');

		if ($val->run())
		{
			$pet->name = Input::post('name');
			$pet->issue_date = Input::post('issue_date');
			$pet->is_available = Input::post('is_available');
			$pet->info = Input::post('info');

			if ($pet->save())
			{
				Session::set_flash('success', 'Updated pet #' . $id);

				Response::redirect('pet');
			}

			else
			{
				Session::set_flash('error', 'Could not update pet #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$pet->name = $val->validated('name');
				$pet->issue_date = $val->validated('issue_date');
				$pet->is_available = $val->validated('is_available');
				$pet->info = $val->validated('info');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('pet', $pet, false);
		}

		$this->template->title = "Pets";
		$this->template->content = View::forge('pet/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('pet');

		if ($pet = Model_Pet::find($id))
		{
			$pet->delete();

			Session::set_flash('success', 'Deleted pet #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete pet #'.$id);
		}

		Response::redirect('pet');

	}

}
