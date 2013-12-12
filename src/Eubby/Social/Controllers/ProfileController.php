<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class ProfileController extends BaseController
{
	public function getIndex($id = null)
	{
		if (is_null($id)) return Redirect::back();

		$repo = $this->getObject('profileRepository');

		$this->layout->content = View::make("social.theme::{$this->theme}.profile.index")
										->with('profile', $repo->find($id));

		return $this->layout;
	}

	public function postUpdate($field)
	{

		if (!$this->getObject('acl')->check()) return Redirect::back();

		$user = $this->getObject('acl')->getUser();

		if (Input::get($field) == '')
		{
			return Redirect::back()->withErrors($field . ' should not be empty.');
		}

		$data = array(
			'description' 	=> Input::get($field),
			'type_name' 	=> $field
			);

		if ($profile = $user->profile()->where('type_name','=',$field)->first())
		{
			$profile->update($data);
		}
		else
		{
			$user->profile()->create($data);
		}
		
		return Redirect::back()->with('success', ucfirst($field) . ' has been updated.');
	}
}