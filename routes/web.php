<?php

use App\Http\Controllers\boysController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\subCategoryController;
use App\Http\Controllers\RelationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/boys', [boysController::class, 'index']);
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

// sub category 
Route::get('/subcategory/index', [subCategoryController::class, 'index'])->name('subCategory.index');
Route::get('/subcategory/create', [subCategoryController::class, 'create'])->name('subCategory.create');
Route::post('/subcategory/store', [subCategoryController::class, 'store'])->name('subCategory.store');
Route::delete('/subcategory/destroy/{id}', [subCategoryController::class, 'destroy'])->name('subCategory.delete');
Route::get('/subcategory/edit\{id}', [subCategoryController::class, 'edit'])->name('subCategory.edit');
Route::post('/subcategory/update/{id}', [subCategoryController::class, 'update'])->name('subCategory.update');

// reletionship
Route::get('belongsTo', [RelationController::class, 'belongsTo']);
Route::get('hasOne', [RelationController::class, 'hasOne']);


//__posts route__//
Route::get('Post/Create', [PostController::class, 'create'])->name('post.create');
Route::get('Post/Manage', [PostController::class, 'index'])->name('post.manage');
Route::post('Post/Store', [PostController::class, 'store'])->name('post.store');
Route::delete('/Post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
