<?php

namespace App\Masks;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MaskInfo
{
    /**Curl出資料**/
    public function get()
    {
        $curl = new  \Curl \ Curl();
        $curl -> setHeader('X-Requested-With', 'XMLHttpRequest');//XMLHttpRequest是js的class物件 能傳遞資料到網頁伺服器 並獲取回應
        $curl -> get('https://data.nhi.gov.tw/resource/mask/maskdata.csv');//用curl獲取網頁頁面內容
        if ($curl -> error) {
            echo $curl -> error_code; //錯誤則顯示錯誤訊息
        }
        else {
            $data = $curl -> response;//curl出成功的響應
            $arr_data = mb_split("\n", $data);//將字串轉陣列
            return $arr_data;
        }
        $curl -> close();
    }
    
    /**確定記錄是否存在**/
    public function exists()
    {
        $exist = DB::table('masks')->where('m_id', 1)->exists();
        return $exist;
    }

    public function updateDB($arr_data, $exist)
    {
        for ($i = 1; $i < count($arr_data)-1; $i++) {
            $arr_data1 = mb_split(",", $arr_data[$i]);
            if ($exist > 0) {
                //若資料庫有資料則修改
                $update_rows = DB::table('masks')->where('m_id', $i)->
                update(array(
                    'Institution_Code' => $arr_data1[0],
                    'Institution_Name' => $arr_data1[1],
                    'Institution_Address' => $arr_data1[2],
                    'Institution_Phone' => $arr_data1[3],
                    'Adult_Mask' => $arr_data1[4],
                    'Child_Mask' => $arr_data1[5],
                    'Source_Time' => $arr_data1[6]
                ));            
            } else { 
                //若資料庫沒資料則新增
                $add_rows = DB::table('masks')->insert([
                    'm_id' => $i,
                    'Institution_Code' => $arr_data1[0],
                    'Institution_Name' => $arr_data1[1],
                    'Institution_Address' => $arr_data1[2],
                    'Institution_Phone' => $arr_data1[3],
                    'Adult_Mask' => $arr_data1[4],
                    'Child_Mask' => $arr_data1[5],
                    'Source_Time' => $arr_data1[6]
                ]);
            }
        }
    }
}
