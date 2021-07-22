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
    return view('\FrontEnd\pertama');
});

Route::get('/login', function () {
    return view('\FrontEnd\login');
});

Route::get('/master', function () {
    return view('\FrontEnd\master');
});


/*Route::get('/','App\Http\Controllers\templatecontroller@index');*/


