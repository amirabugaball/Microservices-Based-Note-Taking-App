<?php

namespace App\Console\Commands;

use App\Jobs\UserLogged;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fire';

    public function handle()
    {
        UserLogged::dispatch();
    }
}
