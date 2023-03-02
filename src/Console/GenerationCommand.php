<?php

namespace Console;

use Illuminate\Console\Command as Command;

class GenerationCommand extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'crud:generate';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		dd('hello from my package!!!');
	}
}