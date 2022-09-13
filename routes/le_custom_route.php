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
    //sevice container
    Route::get('/getCustomRoute01', function () {
         app()->make('bindMethodName01');

    });

    Route::get('/getCustomRoute02', function () {
     cache()->put('name','Maruf');
     echo cache()->get('name');
    });

    Route::get('/getCustomRoute03', function () {
        return view('result');
    });

    Route::get('/getCustomRoute04', function () {
        //my custom facade calling
       echo hunter::companyName();
    });

