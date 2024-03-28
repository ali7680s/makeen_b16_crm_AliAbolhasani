<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function createGet(){
        return view('products.creat');
    }

    public function editGet($id){
        $product = DB::table('products')->where('id' , $id)->get()->first();
        return view('products.edit' , ['product'=>$product]);

    }

    public function createPost(CreateProductsRequest $request){
        DB::table('products')->insert([$request->except('_token')]);
        return redirect(route('products.index'));
    }
    public function editpost (CreateProductsRequest $request , $id){
        DB::table('products')->where('id , $id')->update([
            "name" => $request->name,
            "amount" => $request->amount,
            "description" =>$request->description,
            "color" => $request->color,

        ]);
        return redirect(route('products.index'));
    }
    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect(route('products.index'));
    }
    public function index(){
        $products = DB::table('products')->get();
        return view('products.index' , ['products'=> $products]);
    }
}
