<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class LoginController extends BaseController
{
	public function getIndex()
	{
		$this->layout->content = View::make("social.theme::{$this->theme}.signup.index");

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
				'gender' 				=> Input::get('gender')
				);

		$birthdate = array(
					Input::get('birthday_year'),
					Input::get('birthday_month'),
					Input::get('birthday_day')
			);

		if (Input::get('birthday_year') > 1 && 
			Input::get('birthday_month')> 1 && 
			Input::get('birthday_day') > 1) 
		{
			$credentials['birthdate'] = implode('-',$birthdate);
		}

		if ($this->getObject('acl')->register($credentials, true))
		{
			return 'success';
		}

		return Redirect::back()
						->withInput()
						->withErrors($this->getObject('acl')->getErrors());
		
	}

	public function postLogin()
	{
		$credentials = array(
			'email' 	=> Input::get('email'),
			'password' 	=> Input::get('password')
			);

		if ($this->getObject('acl')->authenticate($credentials))
		{
			return Redirect::route('wall')->with('success', 'Successful Login');
		}

		return Redirect::back()->withErrors('fail', 'Email or Password is not invalid');
	}
}