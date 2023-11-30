<?php

namespace App\Jobs;

use App\Http\Controllers\NoteController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserLogged implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $user_id ;

    public function handle(UserLogged $event) : void
    {
        $user_id = $event->user_id;

        echo "User id : " .$user_id;
    }
}
