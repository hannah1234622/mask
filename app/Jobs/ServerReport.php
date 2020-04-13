<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Artisan;

class ServerReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $arr_data=new \App\Masks\MaskInfo();
        $arr_data=$arr_data->get();

        $exist=new \App\Masks\MaskInfo();
        $exist=$exist->exists();

        $update_db=new \App\Masks\MaskInfo();
        $update_db->updateDB($arr_data,$exist);

    }
}
