<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/add-user',[UserController::class,'store']);
Route::get('users',[UserController::class,'index']);
Route::get('/edit-user/{id}',[UserController::class,'edit']);
Route::put('update-user/{id}',[UserController::class,'update']);
Route::delete('delete-user/{id}',[UserController::class,'destroy']);
//product
Route::post('/add-product',[ProductController::class,'store']);
Route::get('products',[ProductController::class,'index']);
Route::get('/edit-product/{id}',[ProductController::class,'edit']);
Route::put('update-product/{id}',[ProductController::class,'update']);
Route::delete('delete-product/{id}',[ProductController::class,'destroy']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
