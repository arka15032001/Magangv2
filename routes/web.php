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

Route::get('/Deskripsi', function () {
    return view('\FrontEnd\Deskripsi');
});

Route::get('/Persyaratan', function () {
    return view('\FrontEnd\Persyaratan');
});

Route::get('/lowongan', function () {
    return view('\FrontEnd\lowongan');
});

Route::get('/perusahaan', function () {
    return view('\FrontEnd\perusahaan');
});

Route::get('/event', function () {
    return view('\FrontEnd\event');
});

Route::get('/cv', function () {
    return view('\FrontEnd\cv');
});





/*Route::get('/','App\Http\Controllers\templatecontroller@index');*/


