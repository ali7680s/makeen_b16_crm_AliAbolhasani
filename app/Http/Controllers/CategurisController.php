<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategurisRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategurisController extends Controller
{
    //
    public function createGet(){
        return view('Categuris.create');
    }

    public function editGet($id){
        $cate = DB::table('Categuris')->where('id' , $id)->get()->first();
        return view('Categuris.edit' , ['cate'=>$cate]);

    }

    public function createPost(CreateCategurisRequest $request){
        DB::table('Categuris')->insert([$request->except('_token')]);
        return redirect(route('Categuris.index'));
    }
    public function editpost (CreateCategurisRequest $request , $id){
        DB::table('Categuris')->where('id , $id')->update([
            "dastgah" => $request->dastgah,

        ]);
        return redirect(route('Categuris.index'));
    }
    public function delete($id){
        DB::table('Categuris')->where('id',$id)->delete();
        return redirect(route('Categuris.index'));
    }
    public function index(){
        $Categuris = DB::table('Categuris')->get();
        return view('Categuris.index' , ['Categuris'=> $Categuris]);
    }
}
