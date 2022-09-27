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

    public function check(Request $request){
        
        // 'email'=>'required|unique:post', it's match from database
        // like 
        // SELECT
        // count(*) AS aggregate
        // FROM
        // `post`
        // WHERE
        // `email` = exmple@gmail.com
        
        $this->validate($request, [
            'name'=>'required|max:8|min:6',
            'email'=>'required',
            'password'=>'required|max:12|min:6',
        ]);
        dd($request->all());
    }
}
