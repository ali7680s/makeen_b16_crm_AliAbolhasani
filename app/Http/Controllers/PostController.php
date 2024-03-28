<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function createGet(){
        return view('posts.create');
    }

    public function editGet($id){
        $post = DB::table('posts')->where('id' , $id)->get()->first();
        return view('posts.edit' , ['post'=>$post]);

    }

    public function createPost(CreatePostsRequest $request){
        DB::table('posts')->insert([$request->except('_token')]);
        return redirect(route('posts.index'));
    }
    public function editpost (CreatePostsRequest $request , $id){
        DB::table('posts')->where('id , $id')->update([
            "onvan" => $request->onvan,
            "mozoe" => $request->mozoe,
            "tolid" =>$request->tolid,

        ]);
        return redirect(route('posts.index'));
    }
    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect(route('posts.index'));
    }
    public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index' , ['posts'=> $posts]);
    }

}
