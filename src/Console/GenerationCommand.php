<?php

namespace Console;

use Illuminate\Console\Command as Command;

class GenerationCommand extends Command {
	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		dd('hello from my package!!!');
	}
}