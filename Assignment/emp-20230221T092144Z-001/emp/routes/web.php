<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\blogcontroller;
use  App\Http\Controllers\employeecontroller;
use  App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/create_blog', function () {
    return view('frontend.create_blog');
});

Route::post('/create_blog',[blogcontroller::class,'blog']);
Route::get('/show_blog',[blogcontroller::class,'show_blog']);

//===============================  Backend ===============//
Route::get('/index', function () {
    return view('backend.index');
});

Route::get('/add_emp', function () {
    return view('backend.add_emp');
});

Route::get('/manage_emp', function () {
    return view('backend.manage_emp');
});

Route::get('/login', function () {
    return view('backend.login');
});

Route::get('/register', function () {
    return view('backend.register');
});

Route::post('/add_emp',[employeecontroller::class,'add_emp']);
Route::get('/manage_emp',[employeecontroller::class,'manage_emp']);
Route::get('/edit_emp/{id}',[employeecontroller::class,'edit']);
Route::post('/edit_emp/{id}',[employeecontroller::class,'update']);
Route::get('/delete/{id}',[employeecontroller::class,'destroy']);

Route::post('/register',[adminController::class,'index']);
Route::post('/login',[adminController::class,'userlogin']);
Route::get('/logout',[adminController::class,'logout']);


Route::get('/send',[adminController::class,'sendNotification']);