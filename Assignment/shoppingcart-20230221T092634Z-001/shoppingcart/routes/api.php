<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insertproduct',[productcontroller::class,'store']);
Route::get('/product',[productcontroller::class,'allshow']); 
Route::put('/updateproduct/{id}',[productcontroller::class,'update']); 
Route::delete('/product/{id}',[productcontroller::class,'destroy']); 
Route::post('/login',[productcontroller::class,'productlogin']); 
Route::post('/register',[productcontroller::class,'register']); 
Route::get('/profile',[productcontroller::class,'profile']); 

