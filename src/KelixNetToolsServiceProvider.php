<?php

namespace kelixlabs\KelixNetTools;

use Illuminate\Support\ServiceProvider;

class KelixNetToolsServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any package services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['NetTools'] = $this->app->share(function($app){
			return new NetTools;
		});
	}
}