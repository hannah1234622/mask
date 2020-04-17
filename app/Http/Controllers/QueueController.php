<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ServerReport;
use App\Jobs\BetRecord;

class QueueController extends Controller
{
    public function server()
    {
        //dispatch() 將任務推送到隊列上
        ServerReport::dispatch(); 
    }
}
