<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomController extends Controller
{
    public function form_01_details(Request $request){
        
        
        return view('form_result', ['email'=>$request->email, 'pwd'=>Hash::make($request->pwd), 'main_pwd'=>$request->pwd]);
    }
    public function select(Request $request){
        $users = DB::select('select * from users');
        
 
        return view('/result',compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:users|max:32',
            'email'=>'required|unique:users|max:255',
            'password'=>'required|unique:users|max:255'
        ]);
        
        DB::table('users')->insert(['name'=>$request->name,'email'=>$request->email,'password'=>$request->password]);
        return redirect()->back()->with('success', 'successfully inserted new record!!');
    }
    
    public function delete($id)
    {   
        
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('row_success', 'successfully Deleted!!');

    }

    public function edit($id)
    {   
        $data = DB::table('users')->where('id', $id)->first();
        
        return view('update', compact('data'));
    }

    public function update(Request $request, $id)
    {
       
        DB::table('users')->where('id', $id)->update(['name'=>$request->name,'email'=>$request->email,'password'=>$request->password]);
        return redirect('result');
    }
}
