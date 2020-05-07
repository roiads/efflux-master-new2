<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {
    protected $commands = [
        //
    ];
    protected function schedule(Schedule $schedule) {
        $path = '/storage/log/';
        $schedule->command('telescope:prune')->daily();
        $schedule->exec('wget https://efflux.com/api/system1/subid >> /dev/null 2>&1')
            ->everyFifteenMinutes()->sendOutputTo($path);
        $schedule->exec('wget https://efflux.com/api/system1/summary >> /dev/null 2>&1')
            ->everyFifteenMinutes()->sendOutputTo($path);
        $schedule->exec('wget https://efflux.com/api/system1/campaign >> /dev/null 2>&1')
            ->everyFifteenMinutes()->sendOutputTo($path);
    }
    protected function commands() {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }
}