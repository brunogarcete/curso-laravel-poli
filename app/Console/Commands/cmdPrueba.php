<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class cmdPrueba extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-poli:comando';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando de prueba de laravel del curso';

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
     * @return int
     */
    public function handle()
    {
    	Log::info("Curso");
        return 0;
    }
}
