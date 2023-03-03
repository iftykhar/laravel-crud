<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductMode;

use function Ramsey\Uuid\v1;

class Product extends Controller
{
    public function index(){
        return view('backend.pages.product.add');
    }

    public function insert(Request $request){
         $product = new ProductMode();
         $product->name = $request->name;
         $product->des = $request->des;
         $product->price = $request->price;
         $product->quantity = $request->quantity;
         $product->status = $request->status;

         $product->save();
        //  dd($product);
        return view('backend.pages.product.manage');
    }

    public function show(){
        $allproducts = ProductMode::all();
        return view('backend.pages.product.manage',compact('allproducts'));
    }
    
    public function edit($id){
        return view('backend.pages.product.edit');
    }

    public function update(){

    }

    public function delete($id){
        $allproducts = ProductMode::find($id);
        $allproducts->delete();
        return back();
    }
}
