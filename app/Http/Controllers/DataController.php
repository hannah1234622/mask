<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class DataController extends Controller
{
    public function data()
    {
        $data=new \App\Masks\MaskInfo();
        $mask_data = $data->get();
        $mask_data1 = $data->process($mask_data);
        $data->updateDB($mask_data1);
    }
}
