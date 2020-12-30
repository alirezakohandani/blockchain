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

Route::get('test', function() {
    
    while(true)
    {
        $genesis = 'hdasvfhvgsja42358jbdafdas';
        $nonce = rand(1,10);
        $hash = md5($genesis . $nonce);
        echo $hash . "<br>";
        if (substr($hash, 0, 1) == '0') {
            echo "genereated";
            break;
        }
    }
    
});