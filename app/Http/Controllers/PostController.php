<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //__middleware check
    public function __construct()
    {
       $this->middleware('auth') ;
    } 
    //__create mrthod
    public function create()
    {
        $category = Category::all();
        $subcategory = subcategories::all();
        return view('posts.create', ['category'=>$category, 'subcategory'=>$subcategory]);
    }

    //__insert method
    public function store(Request $request)
    {   
         $request->validate([
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'title'=>'',
            'description'=>'required',
            'tags'=>'required',
            // 'post_date'=>'',
            'file'=>'required',
        ]);
        Post::insert([
            'user_id'=>Auth::user()->id,
            'categorie_id'=>$request->category_id,
            'subcategorie_id'=>$request->subcategory_id,
            'title'=>$request->title,
            'slug'=>Str::of($request->title)->slug('-'),
            'img'=>$request->file,
            'description'=>$request->description,
            'tags'=>$request->tags,
            'status'=>$request->status,
            'post_date'=>$request->post_date,
        ]);
        $notification =array('message'=>'Added new category successfully', 'type'=>'success');
        return redirect()->back()->with($notification);
    }

    //__manage method
    public function manage()
    {
        return 'passed';
    }

}
