<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class ProfileController extends BaseController
{
	public function getEdit($id = null)
	{
		if (is_null($id)) return Redirect::back();

		$profile = $this->getObject('user')->find($id);

		dd($profile);
	}

	public function postEdit($id = null)
	{
		if (is_null($id)) return Redirect::back();

		$profile = $this->getObject('user')->find($id);

		dd($profile);
	}
}