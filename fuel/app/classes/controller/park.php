<?php
class Controller_Park extends Controller_Template
{

	public function action_index()
	{
		$data['parks'] = Model_Park::find_all();
		$this->template->title = "Parks";
		$this->template->content = View::forge('park/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('park');

		$data['park'] = Model_Park::find_by_pk($id);

		$this->template->title = "Park";
		$this->template->content = View::forge('park/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Park::validate('create');

			if ($val->run())
			{
				$park = Model_Park::forge(array(
					'rfidno' => Input::post('rfidno'),
					'clientid' => Input::post('clientid'),
					'points_left' => Input::post('points_left'),
					'isin' => Input::post('isin'),
				));

				if ($park and $park->save())
				{
					Session::set_flash('success', 'Added park #'.$park->id.'.');
					Response::redirect('park');
				}
				else
				{
					Session::set_flash('error', 'Could not save park.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Parks";
		$this->template->content = View::forge('park/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('park');

		$park = Model_Park::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Park::validate('edit');

			if ($val->run())
			{
				$park->rfidno = Input::post('rfidno');
				$park->clientid = Input::post('clientid');
				$park->points_left = Input::post('points_left');
				$park->isin = Input::post('isin');

				if ($park->save())
				{
					Session::set_flash('success', 'Updated park #'.$id);
					Response::redirect('park');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('park', $park, false);
		$this->template->title = "Parks";
		$this->template->content = View::forge('park/edit');

	}

	public function action_delete($id = null)
	{
		if ($park = Model_Park::find_one_by_id($id))
		{
			$park->delete();

			Session::set_flash('success', 'Deleted park #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete park #'.$id);
		}

		Response::redirect('park');

	}

}
