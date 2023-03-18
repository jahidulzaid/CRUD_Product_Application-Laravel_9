<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/product',[ProductController::class,'productView'])->name('add-product');
Route::post('/product',[ProductController::class,'productAdd'])->name('add.product');
Route::post('/home',[ProductController::class,'productDelete'])->name('delete.product');

//edit
Route::get('/edit-product/{id}',[ProductController::class,'productEdit'])->name('edit.product');
Route::post('/update-product',[ProductController::class,'productUpdate'])->name('update.product');

Route::get('/add-category',[CategoryController::class,'categoryView'])->name('add.category');
Route::post('/add-category',[CategoryController::class,'categoryAdd'])->name('add.category');


//Route::get('/product',[ProductController::class,'productListView'])->name('add.product');
//Route::get('/product',[ProductController::class,'productdelete'])->name('delete.product');





//Route::get('/view-product',[ProductController::class,'productListView'])->name('view.product');
