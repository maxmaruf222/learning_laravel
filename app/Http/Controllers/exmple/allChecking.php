<?php

namespace App\Http\Controllers\exmple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class allChecking extends Controller
{
    //
    public function formChecking(Request $request){
        return redirect()->back()->with('status', 'passed');
    }

    // how to use view?
    public function viwMethod()
    {   $arr = ['Cname'=>'Component'];
        return view('result', $arr );
    }
}
