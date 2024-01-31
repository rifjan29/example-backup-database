<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // 1. set backup data per minggu
        $schedule->command('backup:clean')->everyMinute()->appendOutputTo(storage_path('logs/console.log'));
        $schedule->command('backup:run')->everyMinute()->appendOutputTo(storage_path('logs/console.log'));
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
