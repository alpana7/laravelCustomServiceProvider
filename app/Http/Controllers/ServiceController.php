<?php

namespace App\Http\Controllers;

use App\Services\Logger;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke(Logger $logger)
    {
        $logger->log("This is a Custom Log message");
    }
}
