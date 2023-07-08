<?php

namespace App\Listeners;

class UserEmailVerificatoinListener
{
    public function __construct()
    {
    }

    public function handle($event)
    {
        $event->user->sendEmailVerificationNotification();
    }
}
