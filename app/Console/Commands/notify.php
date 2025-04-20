<?php

namespace App\Console\Commands;

use App\Facades\Notification;
use Illuminate\Console\Command;

class notify extends Command
{
    protected $signature = 'notify:user {email} {message}';
    protected $description = 'Send a notification to a user via email';

    public function handle()
    {
        $email = $this->argument('email');
        $message = $this->argument('message');

        Notification::sendNotification($message, $email);
        $this->info("Notification sent to $email!");
    }
}
