<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createGet(){
        return view('users.create');
    }

    public function editGet($id){
        $user = DB::table('users')->where('id' , $id)->get()->first();
        return view('users.edit' , ['user'=>$user]);

    }

    // public function createPost(CreateUserRequest $request){
    //     DB::table('users')->insert([$request->except('_token')]);
    //     return redirect(route('users.index'));
    // }
    // public function editpost(EditUserRequest $request , $id){
    //     DB::table('users')->where('id , $id')->update([
    //         "first_name" => $request->first_name,
    //         "last_name" =>$request->last_name,
    //         "phone_number" =>$request->phone_number,
    //         "password"=>$request->password,

    //     ]);
    //     return redirect(route('users.index'));
    // }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('users.index'));
    }
    public function index(){
        $users = DB::table('users')->get();
        // return view('users.index' , ['users'=> $users]);
        return response()->json($users);
    }
    public function store(Request $request)
    {
        $user = DB::table('users')->insert($request->toArray());
        return response()->json($user);
    }

}
//salam khobi chetori haji miseh biay pisham berim 
