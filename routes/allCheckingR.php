<?php
namespace App\Http\Controllers\exmple;
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
Route::get('/newHome', function(){
	return view('home');
});

    route::post('/checkCsrf',[allChecking::class, 'formChecking'])->name('formSubmit');

    // how to use view?
    route::get('/viw', [allChecking::class, 'viwMethod']);


