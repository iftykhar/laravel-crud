<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Abc;

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
