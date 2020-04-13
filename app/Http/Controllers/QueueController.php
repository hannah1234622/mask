<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ServerReport;
use App\Jobs\BetRecord;

class QueueController extends Controller
{
    public function server()
    {
        //dispatch()來把 Job 變成訂單送到 Queue
        ServerReport::dispatch(); 
    }
}
