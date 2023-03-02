<?php

use Illuminate\Support\ServiceProvider as ServiceProviderAlias;
use \Console\GenerationCommand;

class CrudgenServiceProvider extends ServiceProviderAlias {

	public function register() {
		$this->commands([
			GenerationCommand::class,
		]);
	}

	public function boot() {
		$this->publishes([
			__DIR__ . '/../config/crudgen.php' => config_path('crudgen-config.php'),
		]);
	}
}