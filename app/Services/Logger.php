<?php

namespace App\Services;

class Logger
{
    public function log($message)
    {
        // Logic to log the message, for example, writing to a log file
        // For simplicity, we'll just print the message to the console
        echo $message;
    }
}