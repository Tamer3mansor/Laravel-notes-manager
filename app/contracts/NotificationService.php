<?php

namespace App\Contracts;

interface NotificationService
{
    public function sendNotification(string $message,   $receiver): void;
 }