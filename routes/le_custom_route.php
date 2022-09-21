<?php

namespace App\Http\Controllers\exmple; //it's have to include for work with controller
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

    // how to declare middleware in the route?
    route::get('/country', function ()
    {
        return 'This name is avaiable in the middleware';
    })->middleware('c_list');//kernel.php resitared name 

    // how to get csrf token?
    route::get('/csrf_token', function(){
        $token = csrf_token();
        dd($token);
    });




    // how to work controller
    // route::get('/plist', [product::class, 'product_list']);
    // route::get('/padd', [product::class, 'product_add']);
    // route::get('/pdrop', [product::class, 'product_drop']);

    // how to work group of controller
    route::controller(product::class)->group(function(){
        route::get('/plist','product_list');
        route::get('/padd','product_add');
        route::get('/pdrop','product_drop');
    });


    // how to call invokeable controller and with check middleware  
    //if you wanna see the result try this link http://127.0.0.1:8000/invoke?list=india
    route::get('/invoke', invokableController::class)->middleware('c_list');

