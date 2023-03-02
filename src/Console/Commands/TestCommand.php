<?php

class TestCommand extends \Illuminate\Console\Command {
	protected $signature = 'crud:test';

	protected $description = 'Test command';

	public function handle() {
		$this->info('Hello!');
		$this->info('Bye!');
	}

}