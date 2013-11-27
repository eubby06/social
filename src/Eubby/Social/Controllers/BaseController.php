<?php namespace Eubby\Social\Controllers;

use Controller, 
	Config, 
	View,
	Acl;

use Eubby\Social\Services\Provider\ProviderInterface;

abstract class BaseController extends Controller {

	protected $layout 			= null;

	protected $theme 			= null;
	
	protected $provider 		= null;

	protected $objects 			= array();


	public function __construct(ProviderInterface $provider)
	{
		$this->objects['acl'] 	= Acl::getFacadeRoot();
		$this->provider 		= $provider;
		$this->theme 			= 'default';
		$this->layout 			= "social.theme::{$this->theme}.layouts.signup";
	}

	public function setObject($object)
	{
		$getObject = 'get' . ucfirst($object);

		$this->objects[$object] = $this->provider->$getObject();
	}

	public function getObject($object)
	{
		if (isset($this->objects[$object]))
		{
			$object = $this->objects[$object];
		}
		else
		{
			$getObject = 'get' . ucfirst($object);

			$object = $this->provider->$getObject();
		}
		
		return $object;
	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}