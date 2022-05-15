<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DailyCron extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'cron:daily';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Daily cron tasks.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
        DB::statement('TRUNCATE TABLE seen_ads');
        DB::table('adds_statuses')->update(['today_views'=>0]);
        // DB::table('seen_ads')->where('id',2)->delete();
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */


}
