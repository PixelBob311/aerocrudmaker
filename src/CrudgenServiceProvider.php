<?php

use Illuminate\Support\ServiceProvider;

class CrudgenServiceProvider extends ServiceProvider {

	public function boot() {
		if ($this->app->runningInConsole()) {
			$this->commands([
				TestCommand::class,
			]);
		}
	}

	public function register() {
		$this->commands([
			TestCommand::class,
		]);
	}
}