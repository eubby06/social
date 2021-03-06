<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class WallController extends BaseController
{

	public function getIndex($wallIdentifier)
	{
		$user = $this->getObject('user')->findByWallIdentifier($wallIdentifier);

		$this->layout->content = View::make("social.theme::{$this->theme}.wall.index")
										->with('posts', $user->posts);

		return $this->layout;
	}

	public function postPost()
	{
		$repo = $this->getObject('postRepository');

		$data = array(
			'user_id' 		=> $this->getObject('acl')->getUser()->getId(),
			'body' 			=> Input::get('post'),
			'visibility' 	=> Input::get('visibility')
			);

		if ($repo->create($data))
		{
			return Redirect::back()->with('success', 'You have posted on your wall');
		}

		return Redirect::back()->withErrors($repo->getValidationErrors());
	}
}