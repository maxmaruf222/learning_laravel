<?php

namespace App\Providers\exmple;
use App; //needed to use app
use Illuminate\Support\ServiceProvider;

class faceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //needed to bind for facade create facades class
        App::bind('bind_call_name', function(){
            // our calling method 
            return new \App\Test\TestFacades;
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
