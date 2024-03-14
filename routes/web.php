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

    DB::table('users')->insert([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "phone_number" =>$request->phone_number,
        "password" => $request->password,
    ]);
return "کاربر با موفقیت ثبت شد";
});
Route::post('/users/edit/{id}', function (Request $request, $id) {

    DB:: table('users')->where('id',$id)->update([
        "first_name" => $request->first_name,
        "last_name" =>$request->last_name,
        "phone_number" =>$request->phone_number,
        "password"=>$request->password,
    ]);
    return "کاربر با موفقیت ویرایش شد";
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

    DB::table('products')->insert([
        "name" => $request->name,
        "amount" => $request->amount,
        "description" =>$request->description,
        "color" => $request->color,
    ]);
return "product added successfully";
});
Route::post('/products/edit/{id}', function (Request $request, $id) {

    DB:: table('products')->where('id',$id)->update([
        "name" => $request->name,
        "amount" =>$request->amount,
        "description" =>$request->description,
        "color"=>$request->color,
    ]);
    return "product update successfully";
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

    DB::table('orders')->insert([
        "first" => $request->first,
        "tarikh" => $request->tarikh,
        "code_sefaresh" =>$request->code_sefaresh,
        "code_posti" => $request->code_posti,
        "address" => $request->address,
    ]);
return "sefaresh added successfully";
});
Route::post('/orders/edit/{id}', function (Request $request, $id) {

    DB:: table('orders')->where('id',$id)->update([
        "first" => $request->first,
        "tarikh" => $request->tarikh,
        "code_sefaresh" =>$request->code_sefaresh,
        "code_posti" => $request->code_posti,
        "address" => $request->address,
    ]);
    return "order update successfully";
});
// orders  delete routes
Route::delete('/orders/delete/{id}',function($id){

    DB::table('orders')->where('id',$id)->delete();

    return redirect('/orders/index');
});
