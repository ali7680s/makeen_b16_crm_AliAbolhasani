<?php

use App\Http\Controllers\CategurisController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Requests\CreateUserRequest;
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
Route::get('/users/index',[UserController::class, 'index'])->name('users.index');

Route::get('/users/create',[UserController::class, 'createGet'])->name('users.createGet');

Route::get('/users/edit/{id}',[UserController::class ,'editGet'])->name('users.editGet');

// users  post routes
Route::post('/users/create',[UserController::class, 'createPost'])->name('users.createPost');

Route::post('/users/edit/{id}',[UserController::class, 'editPost'])->name('users.editPost');

Route::delete('/users/delete/{id}',[UserController::class ,'delete'])->name('users.delete');
///////////////////

// products  get routes
Route::get('/products/index',[ProductController::class, 'index'])->name('products.index');

Route::get('/products/create',[ProductController::class, 'createGet'])->name('products.createGet');

Route::get('/products/edit/{id}',[ProductController::class ,'editGet'])->name('products.editGet');
// products  post routes
Route::post('/products/create',[ProductController::class, 'createPost'])->name('products.createPost');

Route::post('/products/edit/{id}',[ProductController::class, 'editPost'])->name('products.editPost');

Route::delete('/products/delete/{id}',[ProductController::class ,'delete'])->name('products.delete');
////////
// orders  get routes
Route::get('/orders/index',[OrderController::class, 'index'])->name('orders.index');

Route::get('/orders/create',[orderController::class, 'createGet'])->name('orders.createGet');

Route::get('/orders/edit/{id}',[orderController::class ,'editGet'])->name('orders.editGet');
// orders  post routes
Route::post('/orders/create',[orderController::class, 'createPost'])->name('orders.createPost');

Route::post('/orders/edit/{id}',[orderController::class, 'editPost'])->name('orders.editPost');

Route::delete('/orders/delete/{id}',[orderController::class ,'delete'])->name('orders.delete');
////////
// categuris get routes
Route::get('/categuris/index',[CategurisController::class, 'index'])->name('categuris.index');

Route::get('/categuris/create',[categurisController::class, 'createGet'])->name('categuris.createGet');

Route::get('/categuris/edit/{id}',[categurisController::class ,'editGet'])->name('categuris.editGet');
// categuris  post routes

Route::post('/categuris/create',[categurisController::class, 'createPost'])->name('categuris.createPost');

Route::post('/categuris/edit/{id}',[categurisController::class, 'editPost'])->name('categuris.editPost');

Route::delete('/categuris/delete/{id}',[categurisController::class ,'delete'])->name('categuris.delete');
////////
// posts get routes
Route::get('/posts/index',[PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class, 'createGet'])->name('posts.createGet');

Route::get('/posts/edit/{id}',[PostController::class ,'editGet'])->name('posts.editGet');
// posts  post routes
Route::post('/posts/create',[PostController::class, 'createPost'])->name('posts.createPost');

Route::post('/posts/edit/{id}',[PostController::class, 'editPost'])->name('posts.editPost');

Route::delete('/posts/delete/{id}',[PostController::class ,'delete'])->name('posts.delete');
