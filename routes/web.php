<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('front', 'FrontController@front');

Route::get('mask/{city?}/{region?}/{location?}', 'MaskController@mask');

Route::get('data', 'DataController@data');

Route::get('test', function () {
    $strs = ["flower","flow"];
    $c = [];
    $e = "";
    $d = [];
    $arr = [];
    $z = [];
    $output = [];
    if (empty($strs) || ($strs[0]=="")) {
        return (string)$e;
    } else {
        for ($i=0; $i < count($strs); $i++) {
            if (isset($strs[$i+1])) {
                if (strlen($strs[$i]) > strlen($strs[$i+1])) {
                    $a = $strs[$i];
                    $strs[$i] = $strs[$i+1];
                    $strs[$i+1] = $a;                
                }
            }
        }
        for ($i=0; $i < count($strs); $i++) {
            $b =preg_split('//', $strs[$i], -1, PREG_SPLIT_NO_EMPTY);
            $c[$i] = $b;
        }
        $g = count($c)-1;
        $i = 0;
        for ($j=0; $j < count($c[0]); $j++) {
            for ($i=0; $i < count($c); $i++) {         
                if (isset($c[$i+1][$j])) {
                    if ($c[$i][$j] == $c[$i+1][$j]) {
                        $arr[$i] = [$c[$i][$j]];
                    }else {
                        return (string)$e;
                    }
                }else {
                    if ($c[$g][$j] == $c[0][$j]) {
                        $arr[$g] = [$c[$i][$j]];
                        var_dump($arr[$g]);
                    }else{
                        return (string)$e;
                    }
                }             
            }
            foreach ($arr as $key => $value1) {
                foreach ($value1 as $key => $value) {
                    $d = $value;
                }
            } 
             
            array_push($z,$d);
            $output = implode($z);
            var_dump(count($z));
            var_dump($output);
            echo $g;
            if (strlen($output) == $g) {
                var_dump($output);
            }
        }
    }
     
});