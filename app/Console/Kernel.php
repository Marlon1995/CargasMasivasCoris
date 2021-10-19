<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Clientes;
use App\Jobs\AutonomiJob;
use App\Jobs\MascostasBPJob;
use App\Jobs\IntegralJob;
use App\Jobs\SagrarioJob;
use App\Jobs\SagrarioHJob;
use App\Jobs\VallejoJob;
use App\Jobs\HyunmotorJob;
use App\Jobs\EquinorteJob;
use App\Jobs\AutoFenixJob;
use App\Jobs\LinkmaticJob;
use App\Imports\ClientesImport;
use Maatwebsite\Excel\Facades\Excel;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // JOB PROGRAMADO PARA 
      //  $schedule->job(new AutonomiJob)->everyMinute();
       // $schedule->job(new AutonomiJob)->everyMinute();
       /* $schedule->job(new MascostasBPJob)->everyMinute();
        $schedule->job(new IntegralJob)->everyMinute();
        $schedule->job(new SagrarioJob)->everyMinute();
        $schedule->job(new SagrarioHJob)->everyMinute();
        $schedule->job(new VallejoJob)->everyMinute();
        $schedule->job(new HyunmotorJob)->everyMinute();
        $schedule->job(new EquinorteJob)->everyMinute();
        $schedule->job(new AutoFenixJob)->everyMinute();
        $schedule->job(new LinkmaticJob)->everyMinute();*/

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
    
}
