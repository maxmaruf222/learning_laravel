<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//this file needed to query build
use App\Models\Category; //this file needed to eloquent 
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        //use query builder
        // $category = DB::table('categories')->get();

        // use eloquent 
        $category = Category::all();
        return view('categories.index', ['data'=>$category]);
    }

    public function create(){
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate(['category_name'=> 'required|unique:categories|max:255']);
        
        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->category_slug = Str::of($request->category_name)->slug('-') ;
        // $category->save();
        Category::insert([
            'category_name'=>$request->category_name,
            'category_slug'=>Str::of($request->category_name)->slug('-'),
        ]);
        $notification =array('message'=>'Added new category successfully', 'type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {   
        // $data = DB::table('categories')->where('id', $id)->first();
        // $data = Category::where('id',$id)->first();
        $data = Category::find($id);
        
        return view('categories.edit', compact('data'));
        
    }
    public function delete($request)
    {
        Category::destroy($request);
        return redirect()->back()->with('success', 'deleted successfully!!');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'category_name'=>$request->category_name,
            'category_slug'=>Str::of($request->category_name)->slug('-'),
        ]);
        return redirect()->back()->with('success', 'updated successfully!!');
    }
}
