<?php

namespace App\Http\Controllers\exmple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class allChecking extends Controller
{
    //
    public function formChecking(Request $request){
        dd( $request->all());
    }

    // how to use view?
    public function viwMethod()
    {   $arr = ['name'=>'Maruf'];
        return view('result', $arr );
    }
}
