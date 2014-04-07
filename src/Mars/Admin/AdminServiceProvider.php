<?php namespace Mars\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

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
		$this->package('mars/admin');

		//define a constant that the rest of the package can use to conditionally use pieces of Laravel 4.1.x vs. 4.0.x
		$this->app['administrator.4.1'] = version_compare(\Illuminate\Foundation\Application::VERSION, '4.1') > -1;

		if (!class_exists('AdministratorBaseController')){ // Verify alias is not already created
			if ($this->app['administrator.4.1'])
				class_alias('Illuminate\Routing\Controller', 'AdministratorBaseController');
			else
				class_alias('Illuminate\Routing\Controllers\Controller', 'AdministratorBaseController');
		}

		include __DIR__.'/../../viewComposers.php';
		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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
