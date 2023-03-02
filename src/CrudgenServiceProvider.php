<?php

use Illuminate\Support\ServiceProvider;

class CrudgenServiceProvider extends ServiceProvider {

	public function register() {
		$this->commands([
			TestCommand::class,
		]);
	}
}