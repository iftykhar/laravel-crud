<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Abc;
use App\Http\Controllers\Backend\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Abc::class,'index'])->name('index');
Route::get('/abb',[Abc::class,'about'])->name('about');

Route::get('home',[Abc::class,'home'])->name('home');
Route::get('show',[Abc::class,'show'])->name('show');
Route::get('add',[Abc::class,'add'])->name('add');

// product routes 
Route::get('addproduct',[Product::class,'index'])->name('addproduct');
Route::post('insertproduct',[Product::class,'insert'])->name('insertproduct');
Route::get('showproduct',[Product::class,'show'])->name('showproduct');
Route::get('deleteproduct/{id}',[Product::class,'delete',])->name('deleteproduct');
Route::get('editproduct/{id}',[Product::class,'edit',])->name('editproduct');
Route::get('activeproduct/{id}',[Product::class,'active',])->name('activeproduct');
Route::get('inactiveproduct/{id}',[Product::class,'inactive',])->name('inactiveproduct');





