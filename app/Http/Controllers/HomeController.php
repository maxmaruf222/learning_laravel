<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function form_01_details(Request $request){
        
        
        return view('result', ['email'=>$request->email, 'pwd'=>Hash::make($request->pwd), 'main_pwd'=>$request->pwd]);
    }
}
