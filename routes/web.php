<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/rabota', function () {
    return view('rabota');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/tehnologii', function () {
    return view('tehnologii');
});

Route::get('/onas', function () {
    return view('onas');
});
Route::get('/kley', function () {
    return view('kley');
});

Route::get('/grunt', function () {
    return view('grunt');
});

Route::get('/shuba', function () {
    return view('shuba');
});

Route::get('/karoed', function () {
    return view('karoed');
});

Route::get('/mramor', function () {
    return view('mramor');
});

Route::get('/uteplitel', function () {
    return view('uteplitel');
});

Route::get('/dubel', function () {
    return view('dubel');
});

Route::get('/ctoznacit', function () {
    return view('ctoznacit');
});




//Route::get('/kakayafraksiya', function () {
//    return view('kakayafraksiya');
//});
Route::get('/kakayafraksiya', function () {
    return view('index');
});




//Route::get('/pokraskadekorativnoy', function () {
//    return view('pokraskadekorativnoy');
//});
Route::get('/pokraskadekorativnoy', function () {
    return view('index');
});




//Route::get('/shtukaturkaposteklosetke', function () {
//    return view('shtukaturkaposteklosetke');
//});
Route::get('/shtukaturkaposteklosetke', function () {
    return view('index');
});




//Route::get('/paropronicaemost', function () {
//    return view('paropronicaemost');
//});
Route::get('/paropronicaemost', function () {
    return view('index');
});




//Route::get('/domaotdelkoypoqazobetonu', function () {
//    return view('domaotdelkoypoqazobetonu');
//});
Route::get('/domaotdelkoypoqazobetonu', function () {
    return view('index');
});




//Route::get('/otdelkaqazobetonabezutepleniya', function () {
//    return view('otdelkaqazobetonabezutepleniya');
//});
Route::get('/otdelkaqazobetonabezutepleniya', function () {
    return view('index');
});
