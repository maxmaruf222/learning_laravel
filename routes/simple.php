<?php
namespace App\Http\Controllers\exmple;
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
route::get('/session', function(){
    // set session 
    session()->put('name', 'max');
    
    return view('result');
});

route::get('/sessionClear', function(){
    //it's clear session
    session()->flush(); 
    return view('result');
});

Route::get('/cookie', function () {
    Cookie::queue(Cookie::make('name', 'max', 10));

    return view('result');
});

route::get('/cookieClear', function(){
    Cookie::queue(Cookie::forget('name'));
    return view('result');
});
 
Route::post('user/validation', [allChecking::class, 'check'])->name('form_01');

Route::get('error', function(){
    //error message
   return abort(401);
});

