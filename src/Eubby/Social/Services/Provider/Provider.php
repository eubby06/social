<?php namespace Eubby\Social\Services\Provider;

use App;

class Provider implements ProviderInterface
{

	public function __call($class, $arguments)
	{
		$className = str_replace('get','',$class);

		return $this->resolveModel($className);
	}

	public function resolveModel($class)
	{
		$modelClass = '\\Eubby\Social\\Models\\Social' . $class . 'Model';
		$serviceClass = '\\Eubby\Social\\Services\\' . $class . '\\'. $class;
		$repoClass = '\\Eubby\Social\\Repositories\\' . $class;

		//model class look up
		if (class_exists($modelClass))
		{
			return new $modelClass();
		}	
		//lib class look up
		else if (class_exists($serviceClass))
		{
			return new $serviceClass();
		}
		//repo class look up
		else if (class_exists($repoClass))
		{
			$modelName = str_replace('Repository', '', $class);
			$modelClass = '\\Eubby\Social\\Models\\Social' . $modelName . 'Model';

			$objModel = new $modelClass();

			$repo = new $repoClass($objModel);

			return $repo;
		}
		//container class look up
		else if (App::make($class))
		{
			return App::make($class)->getFacadeRoot();
		}
		else
		{
			return null;
		}
	}
}