<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Session;

Route::get('/',[ProductController::class,'index']);
Route::get('/product/tv',[ProductController::class,'tv']);
Route::get('/product/mobile',[ProductController::class,'mobile']);
Route::get('/product/tv/{id}',[ProductController::class,'tvdetail']);
Route::get('/product/mobile/{id}',[ProductController::class,'mobiledetail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/addtocart/{id}',[ProductController::class,'addtocart']);
Route::get('/mycart',[CartController::class,'showall']);
Route::post('/mycart',[CartController::class,'delete']);
Route::post('/order',[OrderController::class,'setorder']);
Route::post('/placeorder',[OrderController::class,'placeorder']);
Route::get('/myorder',[OrderController::class,'showall']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/reg',function(){
    return view('reg');
});
Route::post('/reg',[UserController::class,'reg']);
Route::get('/logout',static function(){
    Session::forget('user');
    return redirect('/login');
});
