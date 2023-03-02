<?php

namespace Pixelbob;

use Illuminate\Support\ServiceProvider;
use Pixelbob\Console\Commands\Crudgen\TestCommand;

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