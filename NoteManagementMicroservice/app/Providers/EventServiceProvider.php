<?php

namespace App\Providers;

use App\Jobs\UserLogged;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        \App::bindMethod(UserLogged::class . '@handle',fn($job)=>$job->handle($job));
    }


}
