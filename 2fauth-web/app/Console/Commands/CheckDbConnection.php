<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDbConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = '2fauth:check-db-connection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if 2FAuth is connected to a database';

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
     */
    public function handle() : int
    {
        $this->newLine();

        try {
            DB::connection()->getPDO();
            $this->info('Currently connected to ' . DB::connection()->getDriverName() . ' db "' . DB::connection()->getDatabaseName() . '"');

            return 1;
        } catch (\Exception $e) {
            $this->error('Cannot connect to ' . DB::connection()->getDriverName() . ' db "' . DB::connection()->getDatabaseName() . '"');

            return 0;
        }
    }
}
