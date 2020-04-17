<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaskController extends Controller
{
    public function mask($city="0", $region="0")
    {
        //抓取符合條件的資料
        $citys = \App\Model\Region::where('c_id', $city)->where('r_id', $region)->first();
        if (isset($citys)) {
            $city_value = $citys->city;
            $region_value = $citys->region;
            $locations = \App\Model\Masks::where('Institution_Address', 'LIKE', '%'.$city_value.'%'.$region_value.'%')->get();
            return view('region', compact('locations','region','city'));
        }
        return view('region');
    }
}
