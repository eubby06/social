<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View, Input, Redirect;

class WallController extends BaseController
{

	public function getIndex()
	{
		$this->layout->content = View::make("social.theme::{$this->theme}.wall.index");

		return $this->layout;
	}
}