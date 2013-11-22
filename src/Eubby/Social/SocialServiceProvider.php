<?php namespace Eubby\Social;

use Illuminate\Support\ServiceProvider;
use Config;

class SocialServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('eubby/social', 'eubby/social');
		
		include __DIR__ . '/../../start.php';
		include __DIR__ . '/../../filter.php';
		include __DIR__ . '/../../route.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
				'Eubby\Social\Services\Provider\ProviderInterface', 
				'Eubby\Social\Services\Provider\Provider'
				);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}