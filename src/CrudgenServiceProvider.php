<?php

use Illuminate\Support\ServiceProvider as ServiceProviderAlias;
use \Commands\CrudgenCommand;

class CrudgenServiceProvider extends ServiceProviderAlias {

	public function register() {
		$this->commands([
			CrudgenCommand::class,
		]);
	}

	public function boot() {
		$this->publishes([
			__DIR__ . '/../config/crudgen.php' => config_path('crudgen-config.php'),
		]);
	}
}