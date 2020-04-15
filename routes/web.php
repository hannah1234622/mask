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
    $strs = ["flower","flow","flight"];
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
        echo $g = count($c)-1;
        var_dump($c);
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
                    }else{
                        return (string)$e;
                    }
                }             
            }
            var_dump($arr);
            
            foreach ($arr as $key => $value1) {
                foreach ($value1 as $key => $value) {
                    $d = $value;
                    
                }
            }   
            array_push($z,$d);
            $output = implode($z); 
            print_r($output);
            echo "<br>";
            echo strlen($output);
            echo "<br>";
            echo $j;

        }
        
                
                

                    
        /*
        for ($i=0; $i < count($c); $i++) {
            if (isset($c[$i+1])) {
                if ($c[$i][0] !== $c[$i+1][0]) {
                    return (string)$e; 
                }else {
                    $result = array_intersect_assoc ($c[$i], $c[$i+1]);
                    if (empty($result)) {
                        return (string)$e; 
                    }                    
                }
            }elseif (count($c)==1) {
                $output = implode($c[$i]);
                return $output;
            }
        }
        $output = implode($result);
        return $output;
        */
    }
     
});