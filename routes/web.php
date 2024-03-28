<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Users get routes
Route::get('/users/create', function () {
    return view('users.create');
});
Route::get('/users/edit/{id}', function ($id) {
    $user= DB::table('users')->where('id',$id)->first();
    return view('users.edit',['user'=>$user]);
});
Route::get('/users/index', function () {

    $users= DB::table('users')->get();
    return view('users.index',["users"=>$users]);
});
// users  post routes
Route::post('/users/create', function (Request $request) {

    $validated = $request -> validate([
        'first_name'=> 'required',
        'last_name'=> 'required',
        'phone_number'=> 'required',
        'password'=> 'required',
    ],[
        'first_name.required'=>'این فیلد اجباری است',
        'last_name.required'=>'این فیلد اجباری است',
        'phone_number.required'=>'این فیلد اجباری است',
        'password.required'=>'این فیلد اجباری است',
    ]
    );
    DB::table('users')->insert([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "phone_number" =>$request->phone_number,
        "password" => $request->password,
    ]);
    return redirect('/users/index');
});
Route::post('/users/edit/{id}', function (Request $request, $id) {

    DB:: table('users')->where('id',$id)->update([
        "first_name" => $request->first_name,
        "last_name" =>$request->last_name,
        "phone_number" =>$request->phone_number,
        "password"=>$request->password,
    ]);
    return redirect('/users/index');
});
// user delete routes
Route::delete('/users/delete/{id}',function($id){

    DB::table('users')->where('id',$id)->delete();

    return redirect('/users/index');
});

///////////////////

// products  get routes
Route::get('/products/create', function () {
    return view('products.creat');
});
Route::get('/products/edit/{id}', function ($id) {
    $product= DB::table('products')->where('id',$id)->first();
    return view('products.edit',['product'=>$product]);
});
Route::get('/products/index', function () {

    $products= DB::table('products')->get();
    return view('products.index',["products"=>$products]);
});
// products  post routes
Route::post('/products/create', function (Request $request) {

    $validated = $request -> validate([
        'name'=> 'required',
        'amount'=> 'required',
    ],[
        'name.required'=>'این فیلد اجباری است',
        'amount.required'=>'این فیلد اجباری است',
    ]
    );

    DB::table('products')->insert([
        "name" => $request->name,
        "amount" => $request->amount,
        "description" =>$request->description,
        "color" => $request->color,
    ]);
    return redirect('/products/index');
});
Route::post('/products/edit/{id}', function (Request $request, $id) {

    DB:: table('products')->where('id',$id)->update([
        "name" => $request->name,
        "amount" =>$request->amount,
        "description" =>$request->description,
        "color"=>$request->color,
    ]);
    return redirect('/products/index');
});
// products  delete routes
Route::delete('/products/delete/{id}',function($id){

    DB::table('products')->where('id',$id)->delete();

    return redirect('/products/index');
});

////////
// orders  get routes
Route::get('/orders/create', function () {
    return view('orders.creat');
});
Route::get('/orders/edit/{id}', function ($id) {
    $order= DB::table('orders')->where('id',$id)->first();
    return view('orders.edit',['order'=>$order]);
});
Route::get('/orders/index', function () {

    $orders= DB::table('orders')->get();
    return view('orders.index',["orders"=>$orders]);
});
// orders  post routes
Route::post('/orders/create', function (Request $request) {

    $validated = $request -> validate([
        'first'=> 'required',
        'tarikh'=> 'required',
        'code_sefaresh'=> 'required',
        'code_posti'=> 'required',
        'address'=> 'required',
    ],[
        'first.required'=>'این فیلد اجباری است',
        'tarikh.required'=>'این فیلد اجباری است',
        'code_sefaresh.required'=>'این فیلد اجباری است',
        'code_posti.required'=>'این فیلد اجباری است',
        'address.required'=>'این فیلد اجباری است',
    ]
    );
    DB::table('orders')->insert([
        "first" => $request->first,
        "tarikh" => $request->tarikh,
        "code_sefaresh" =>$request->code_sefaresh,
        "code_posti" => $request->code_posti,
        "address" => $request->address,
    ]);
return "سفارش با موفقیت ثبت شد";
});
Route::post('/orders/edit/{id}', function (Request $request, $id) {

    DB:: table('orders')->where('id',$id)->update([
        "first" => $request->first,
        "tarikh" => $request->tarikh,
        "code_sefaresh" =>$request->code_sefaresh,
        "code_posti" => $request->code_posti,
        "address" => $request->address,
    ]);
    return redirect('/orders/index');


});
// orders  delete routes
Route::delete('/orders/delete/{id}',function($id){

    DB::table('orders')->where('id',$id)->delete();

    return redirect('/orders/index');
});

////////
// categuris get routes
Route::get('/categuris/create', function () {
    return view('categuris.create');
});
Route::get('/categuris/edit/{id}', function ($id) {
    $cate= DB::table('categuris')->where('id',$id)->first();
    return view('categuris.edit',['cate'=>$cate]);
});
Route::get('/categuris/index', function () {

    $categuris= DB::table('categuris')->get();
    return view('categuris.index',["categuris"=>$categuris]);
});
// categuris  post routes
Route::post('/categuris/create', function (Request $request) {

    DB::table('categuris')->insert([
        "dastgah" => $request->dastgah,
        "mode" => $request->mode,
        "fee" =>$request->fee,
        "toz" => $request->toz,
        "foroshgah" => $request->foroshgah,
    ]);
    return redirect('/categuris/index');
});
Route::post('/categuris/edit/{id}', function (Request $request, $id) {

    DB:: table('categuris')->where('id',$id)->update([
        "dastgah" => $request->dastgah,
        "mode" => $request->mode,
        "fee" =>$request->fee,
        "toz" => $request->toz,
        "foroshgah" => $request->foroshgah,
    ]);
    return redirect('/categuris/index');


});
// categuris  delete routes
Route::delete('/categuris/delete/{id}',function($id){

    DB::table('categuris')->where('id',$id)->delete();

    return redirect('/categuris/index');
});

////////
// posts get routes
Route::get('/posts/create', function () {
    return view('posts.create');
});
Route::get('/posts/edit/{id}', function ($id) {
    $post= DB::table('posts')->where('id',$id)->first();
    return view('posts.edit',['post'=>$post]);
});
Route::get('/posts/index', function () {

    $posts= DB::table('posts')->get();
    return view('posts.index',["posts"=>$posts]);
});
// posts  post routes
Route::post('/posts/create', function (Request $request) {

    DB::table('posts')->insert([
        "onvan" => $request->onvan,
        "mozoe" => $request->mozoe,
        "tolid" =>$request->tolid,
        "forosh" => $request->forosh,
    ]);
    return redirect('/posts/index');
});
Route::post('/posts/edit/{id}', function (Request $request, $id) {

    DB:: table('posts')->where('id',$id)->update([
        "onvan" => $request->onvan,
        "mozoe" => $request->mozoe,
        "tolid" =>$request->tolid,
        "forosh" => $request->forosh,
    ]);
    return redirect('/posts/index');


});
// posts  delete routes
Route::delete('/posts/delete/{id}',function($id){

    DB::table('posts')->where('id',$id)->delete();

    return redirect('/posts/index');
});
