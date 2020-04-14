<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaskController extends Controller
{
    public function mask($city="0", $region="0", $location="請選擇")
    {
        //判斷 $_GET 是否存在
        $county = array("請選擇", "臺北市", "基隆市", "新北市", "宜蘭縣", "桃園市", "新竹市", "新竹縣", "苗栗縣", "臺中市", "彰化縣", "南投縣", "嘉義市", "嘉義縣", "雲林縣", "臺南市", "高雄市", "澎湖縣", "金門縣", "屏東縣", "臺東縣", "花蓮縣", "連江縣");
        if ($city < count($county) && $city >= 0) {
            $county_city = $county[$city];
            $rows=array();
            if ($city!="0") {
                $rows = \App\Model\Region::where('Institution_Address', 'LIKE', '%'.$county_city.'%'.$location.'%')
                        ->get();
            }
            return view('region', compact('rows', 'county_city', 'region', 'location', 'city'));            
        }else {
            return view('region');
        }       
    }
}
