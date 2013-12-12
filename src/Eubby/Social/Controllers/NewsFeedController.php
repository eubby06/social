<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class NewsFeedController extends BaseController
{

	public function getIndex()
	{
		$repo = $this->getObject('postRepository');

		$this->layout->content = View::make("social.theme::{$this->theme}.newsfeed.index")
										->with('posts', $repo->findAll());

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