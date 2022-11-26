<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facades\Debugbar;
use Intervention\Image\Facades\Image;
use Laravel\Ui\Presets\React;

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
        $subcategory = subcategory::all();
        return view('posts.create', ['category'=>$category, 'subcategory'=>$subcategory]);
    }

    //__insert method
    public function store(Request $request)
    {   
        $data = $request->validate([
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'title'=>'required',
            'img'=>'',
            'description'=>'required',
            'tags'=>'required',
            'status'=>'nullable',
            'post_date'=>'',
        ]);
        Debugbar::info('validation success');
        $image_name = Str::of($request->title)->slug('_') . '.' . $data['img']->getClientOriginalExtension();
        $image_path = 'img/' . $image_name;
        Debugbar::info('path success');
        Image::make($data['img'])->resize(320, 240)->save(public_path($image_path));
        Debugbar::info('resize and save success');
        $data['image'] = $image_path;
        $blog = Post::insert([
            'user_id'=> Auth::user()->id,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'title'=>$request->title,
            'slug'=>Str::of($request->title)->slug('_'),
            'img'=>$data['image'],
            'description'=>$request->description,
            'tags'=>$request->tags,
            'status'=>$request->status,
            'post_date'=>$request->post_date,
            'created_at'=> now(),
        ]);
        $notification = array('message'=>'Created new post successfully', 'type'=>'success');
        return redirect()->back()->with($notification);
        
    }

    //__index method
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    //__post destroy
    public function destroy($id)
    {
        $data = Post::find($id);
        if (file_exists($data->img)) {
            unlink($data->img);
            $data->delete($data);
            $notification = array('message'=>'Deleted post successfully', 'type'=>'danger');
            return redirect()->back()->with($notification);
        }else{
            $notification = array('message'=>'File dose not found', 'type'=>'danger');
            return redirect()->back()->with($notification);
        }
        
    }

    //__edit method
    public function edit($id)
    {   
        $subcategory = Subcategory::all();
        $category = Category::all();
        $post = Post::find($id);
        return view('posts.update', compact('category', 'post','subcategory'));
    }
    //__edit update
    public function update(Request $request, $id)
    {   
        $data = $request->validate([
        'category_id'=>'required',
        'subcategory_id'=>'required',
        'title'=>'required',
        'img'=>'',
        'description'=>'required',
        'tags'=>'required',
        'status'=>'nullable',
        'post_date'=>'',
    ]);
    
    if( !empty($data['img']) ){
        $image_name = Str::of($request->title)->slug('_') . '.' . $data['img']->getClientOriginalExtension();
        $image_path = 'img/' . $image_name;
        Image::make($data['img'])->resize(320, 240)->save(public_path($image_path));
        $data['image'] = $image_path;
    }
    if (empty($data['image'])){ 
        $data['image'] = $request->old_img;
    }
    
    $blog = Post::find($id)->update([
        'user_id'=> Auth::user()->id,
        'category_id'=>$request->category_id,
        'subcategory_id'=>$request->subcategory_id,
        'title'=>$request->title,
        'slug'=>Str::of($request->title)->slug('_'),
        'img'=> $data['image'],
        'description'=>$request->description,
        'tags'=>$request->tags,
        'status'=>$request->status,
        'post_date'=>$request->post_date,
        'updated_at'=> now(),
    ]);
    if(!empty($data['image'])){
        if (file_exists($request->old_img)) {
            unlink($request->old_img);
        }
    }else{ return true;}
    
    $notification = array('message'=>'Update successfully', 'type'=>'success');
    return redirect()->back()->with($notification);
    
    }
}
