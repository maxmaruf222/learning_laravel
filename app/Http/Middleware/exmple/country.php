<?php

namespace App\Http\Middleware\exmple;

use Closure;
use Illuminate\Http\Request;

class country
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //you have to register this middleware name in kernel.php
        //country list
        $country_list =[
            'bangladesh',
            'india',
            'china'
        ];
        // match the request value in array value
        if (in_array($request->list, $country_list)) {
            //request sent successfully
            return $next($request);
        }else{
            // return base path
            return redirect()->to('/');
        }
    }
}
