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
        // return view('backend.pages.product.edit');
        $product = ProductMode::find($id);
        return view('backend.pages.product.edit',compact('product'));

    }

    public function update(){

    }

    public function delete($id){
        $product = ProductMode::find($id);
        $product->delete();
        return back();
    }
    public function active($id){
        $product = ProductMode::find($id);
        $product->status = '2';
        $product->update();
        return back();
    }
    public function inactive($id){
        $product = ProductMode::find($id);
        $product->status = '1';
        $product->update();
        return back();
    }
    
}
