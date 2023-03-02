<?php

use Illuminate\Support\ServiceProvider as ServiceProviderAlias;

class CrudgenServiceProvider extends ServiceProviderAlias {
	public function boot() {
		$this->publishes([
			__DIR__ . '/../config/crudgen.php' => config_path('crudgen-config.php'),
		]);
	}
}