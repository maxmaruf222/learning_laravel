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

    Route::get('/getCustomRoute05', function () {
        //my custom facade calling
       echo hunter::current_date();
    });


    // Route::get('/home', function(){
    //     return view('home');
    // });

    // if you only loade page you can use this method it's fast 
    route::view('home','home');

    // it's resive get or post method
    route::match(['get','post'],'/route1', function(){
        return 'this route paramiter result';
    });

    // must uses route method
    // route::post();
    // route::put();
    // route::match();
    // route::patch();
    // route::any();
    // route::delete();
    // route::options();

    // route parameter pass
    route::get('/routeN/{Name0}', function($Name0){
        return 'data passed:'.$Name0;
    });
    
    // route name
    //name('this name call from url()');
    // like {{ route('routeName0') }}
    route::get(md5('str'), function(){
        return 'route name working successfully';
    })->name('routeName0');

    route::get('/country', function ()
    {
        return 'This name is avaiable in the middleware';
    })->middleware('c_list');//kernel.php resitared name 

