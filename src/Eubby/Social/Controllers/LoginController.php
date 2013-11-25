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
		$credentials = array(
				'first_name' 			=> Input::get('first_name'),
				'last_name' 			=> Input::get('last_name'),
				'email' 				=> Input::get('email'),
				'password' 				=> Input::get('password'),
				'password_confirmation' => Input::get('password_confirmation'),
				);

		if ($this->getObject('acl')->register($credentials))
		{
			return 'success';
		}

		return Redirect::back()
						->withInput()
						->withErrors($this->getObject('acl')->getErrors());
		
	}

	public function postLogin()
	{
		dd(Input::all());
	}
}