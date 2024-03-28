<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function createGet(){
        return view('orders.creat');
    }

    public function editGet($id){
        $order = DB::table('orders')->where('id' , $id)->get()->first();
        return view('orders.edit' , ['order'=>$order]);

    }

    public function createPost(CreateOrdersRequest $request){
        DB::table('orders')->insert([$request->except('_token')]);
        return redirect(route('orders.index'));
    }
    public function editpost (CreateOrdersRequest $request , $id){
        DB::table('orders')->where('id , $id')->update([
            "first" => $request->first,
            "tarikh" => $request->tarikh,
            "code_sefaresh" =>$request->code_sefaresh,
            "code_posti" => $request->code_posti,
            "address" => $request->address,

        ]);
        return redirect(route('orders.index'));
    }
    public function delete($id){
        DB::table('orders')->where('id',$id)->delete();
        return redirect(route('orders.index'));
    }
    public function index(){
        $orders = DB::table('orders')->get();
        return view('orders.index', ['orders'=> $orders]);
    }
}
