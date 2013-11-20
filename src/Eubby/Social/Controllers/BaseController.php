<?php namespace Eubby\Social\Controllers;

use Illuminate\Routing\Controllers\Controller;
use App,
	View,
	Acl;

class BaseController extends Controller
{

	public function __construct(Acl $acl)
	{
		$this->acl 		= $acl ? $acl->getFacadeRoot() : App::make('acl');
		$this->layout 	= "eubby/social::layouts.frontend";
	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}