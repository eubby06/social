<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class CommentController extends BaseController
{
	public function postCreate()
	{
		$repo = $this->getObject('commentRepository');

		$data = array(
			'user_id' => $this->getObject('acl')->getUser()->getId(),
			'post_id' => Input::get('post_id'),
			'body'    => Input::get('comment')
			);

		if ($repo->create($data))
		{
			return Redirect::back()->with('success', 'Comment has been posted');
		}

		return Redirect::back()->withErrors($repo->getValidationErrors());
	}
}