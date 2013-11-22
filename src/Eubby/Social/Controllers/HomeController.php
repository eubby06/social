<?php namespace Eubby\Social\Controllers;

use Eubby\Social\Controllers\BaseController;
use View;

class HomeController extends BaseController
{
	public function getIndex()
	{
		return $this->layout;
	}
}