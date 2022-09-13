<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class le_custom_provider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //create a bind method
        app()->bind('bindMethodName01', function($app){
            echo 'passed';
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //create array
        $data = array();
        $data['a'] = 10;
        $data['b'] = 20;
        $data['c'] = 30;
        //share everywhare
        view()->share('number', $data);
    }
}
