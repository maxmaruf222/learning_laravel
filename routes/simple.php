<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
route::get('/viw', function(){
    // echo url()->current();
    // echo url()->full();
    // echo url()->previous();

   echo URL::current();
//    echo URL::full();
//    echo URL::previous();

});

