<?php

use App\Contracts\NotificationService;
use Illuminate\Log\Logger;

/**
 * Summary of EmailNotificationService
 */
class EmailNotificationService implements NotificationService
{
    public function __construct(Logger $logger){

    }
    public function sendNotification(string $message,   $receiver): void
    {
         echo "Sending email notification to $receiver: $message\n";
    }

    
}
 