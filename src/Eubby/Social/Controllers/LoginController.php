<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class LoginController extends BaseController
{
	public function getIndex()
	{
		$this->layout->content = View::make("social.theme::{$this->theme}.frontend.user.signup");

		return $this->layout;
	}

	public function postSignup()
	{

		try
		{
			$user = $this->getObject('acl')->register(array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				));
		}
		catch(\Exception $e)
		{
			return Redirect::back()->withErrors($e->getMessage());
		}
	}
}