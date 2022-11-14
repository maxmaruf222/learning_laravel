<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategories;
use Illuminate\Support\Str;

class subCategoryController extends Controller
{
    public function index()
    {
       $data = subcategories::all();
       return view('categories.index', compact('data'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('subcategory.create', ['categories'=>$categories]);
        
    }

    public function store(Request $request)
    {   
        $request->validate([
            'category_id'=> 'required',
            'category_name'=> 'required|unique:subcategories|max:250'
        ]);
        subcategories::insert([
            'category_id'=>$request->category_id,
            'category_name'=>$request->category_name,
            'category_slug'=>Str::of($request->category_name)->slug('-'),
        ]);
        $notification = array('message'=>'sub category added successfully!!', 'type'=>'success');
        return redirect()->back()->with($notification);
        
    }
}
