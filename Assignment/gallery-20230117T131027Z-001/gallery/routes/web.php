<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\photocontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.index');
});


Route::get('/add_photo', function () {
    return view('backend.add_photo');
});
Route::post('/add_photo',[photocontroller::class,'add_photo']);
Route::get('/manage_photo',[photocontroller::class,'manage_photo']);

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/index',[photocontroller::class,'viewall']);