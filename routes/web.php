<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CustomController;
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
Route::view('form', 'form');
Route::post(md5(10), [CustomController::class, 'form_01_details'])->name('form_01');
route::prefix('admin')->middleware('admin')->group(function(){
    route::get('/',[adminController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
