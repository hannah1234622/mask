<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Masks;

class DataController extends Controller
{
    public function data()
    {
        $data=new \App\Masks\MaskInfo();
        $arr_data=$data->get();
        $exist=$data->exists();
        $data->updateDB($arr_data,$exist);
    }
}
