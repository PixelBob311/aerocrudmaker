<?php

namespace Commands;

use Illuminate\Console\Command as Command;

class CrudgenCommand extends Command {
	protected $signature = 'crudgen:generate';

	/**
	 * Execute the console command.
	 */
	public function handle() {
		dd("hello from my custom lib!!!");
	}
}