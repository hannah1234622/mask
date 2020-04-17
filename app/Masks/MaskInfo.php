<?php

namespace App\Masks;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Exception;

class MaskInfo
{
    /**Curl出資料**/
    public function get()
    {
        $curl = new  \Curl \ Curl();
        $curl -> setHeader('X-Requested-With', 'XMLHttpRequest');//XMLHttpRequest是js的class物件 能傳遞資料到網頁伺服器 並獲取回應
        $curl -> get('https://data.nhi.gov.tw/resource/mask/maskdata.csv');//用curl獲取網頁頁面內容
        if ($curl -> error) {
            $err = $curl -> error_code;
            $curl -> close();
            throw new \App\Exceptions\MaskException($err);//錯誤則執行錯誤處理
        }
        $mask_data = $curl -> response;//curl出成功的響應
        $curl -> close();
        return $mask_data;
    }
    
    /**處理得到的資料**/
    public function process($mask_data)
    {
        $mask_data1 = mb_split("\n", $mask_data);//將字串轉陣列
        array_splice($mask_data1,0,1);
        return $mask_data1;
    }

    public function updateDB($mask_data1)
    {
        for ($i = 0; $i < count($mask_data1)-1; $i++) {
            $mask_info = mb_split(",", $mask_data1[$i]);
            $exist = DB::table('masks')->where('Institution_Code', $mask_info[0])->exists();
            if ($exist) {
                //若資料庫有資料則修改
                $update_rows = DB::table('masks')->where('Institution_Code', $mask_info[0])->
                update(array(
                    'Institution_Code' => $mask_info[0],
                    'Institution_Name' => $mask_info[1],
                    'Institution_Address' => $mask_info[2],
                    'Institution_Phone' => $mask_info[3],
                    'Adult_Mask' => $mask_info[4],
                    'Child_Mask' => $mask_info[5],
                    'Source_Time' => $mask_info[6]
                ));            
            } else { 
                //若資料庫沒資料則新增
                $add_rows = DB::table('masks')->insert([
                    'Institution_Code' => $mask_info[0],
                    'Institution_Name' => $mask_info[1],
                    'Institution_Address' => $mask_info[2],
                    'Institution_Phone' => $mask_info[3],
                    'Adult_Mask' => $mask_info[4],
                    'Child_Mask' => $mask_info[5],
                    'Source_Time' => $mask_info[6],
                ]);
            }
        }
    }
}
