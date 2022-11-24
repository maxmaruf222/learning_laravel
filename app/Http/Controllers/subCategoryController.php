<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use Illuminate\Support\Str;

class subCategoryController extends Controller
{
    public function index()
    {
       $data = subcategory::all();
       return view('subcategory.index', compact('data'));
    }

    public function create()
    {
        $category = Category::all();
        return view('subcategory.create', ['category'=>$category]);
        
    }

    public function store(Request $request)
    {   
        $request->validate([
            'category_id'=> 'required',
            'category_name'=> 'required|unique:subcategory|max:250'
        ]);
        subcategory::insert([
            'category_id'=>$request->category_id,
            'category_name'=>$request->category_name,
            'category_slug'=>Str::of($request->category_name)->slug('-'),
        ]);
        $notification = array('message'=>'sub category added successfully!!', 'type'=>'success');
        return redirect()->back()->with($notification);
        
    }

    public function destroy($id)
    {
        subcategory::destroy($id);
        $notification = array('message'=>'Deleted successfully!!', 'type'=>'warning');
        return redirect()->back()->with($notification);
    }


    public function edit($id)
    {   
        $data = subcategory::find($id);
        return view('subcategory.edit', compact('data') );
    }

    public function update(Request $request, $id)
    {   
        $request->validate([
            'category_name'=> 'required|unique:subcategory|max:250'
        ]);
        subcategory::find($id)->update([
            'category_name'=>$request->category_name,
        ]);

        $notification = array('message'=>'update subCategory successfully!!', 'type'=>'success');
        return redirect()->back()->with($notification);
        
    }
}
