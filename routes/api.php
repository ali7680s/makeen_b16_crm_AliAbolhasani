<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix'=>'users', 'as' =>'users.'], function (){
    Route::get('index',[UserController::class, 'index'])->name('index');
    Route::post('store',[UserController::class,'store'])->name('store');
    Route::put('edit/{id}',[UserController::class,'edit'])->name('edit');
    Route::post('delete',[UserController::class,'delete'])->name('delete');
});
