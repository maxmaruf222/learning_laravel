<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/form',function(){
    return view('form');
});

Route::post(md5(10), [CustomController::class, 'form_01_details'])->name('form_01');
Route::get(md5(10), [CustomController::class, 'form_01_details'])->name('re_view');
route::prefix('admin')->middleware('admin')->group(function(){
    route::get('/',[adminController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/result',[CustomController::class, 'select']);
Route::post('form/add/new',[CustomController::class, 'store'])->name('add.store');
Route::delete('form/delete/{id}', [CustomController::class, 'delete'])->name('form.delete');
Route::post('form/data/edit/{id}', [CustomController::class, 'edit'])->name('form.edit');
Route::post('form/update/{id}', [CustomController::class, 'update'])->name('form.update');

