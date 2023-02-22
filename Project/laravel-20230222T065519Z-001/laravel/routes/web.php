<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\wishlistController;

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

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog-single', function () {
    return view('frontend.blog-single');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/cart',[cartcontroller::class,'manage_cart']);
Route::post('/product-single/{id}',[cartcontroller::class,'cart']);
Route::get('/cart/{id}',[cartcontroller::class,'delete_cart']);
Route::post('/product-single/{id}',[cartcontroller::class,'update_cart']);


Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::post('/manage_contact',[contactcontroller::class,'manage_contact']);   
Route::get('/manage_contact',[contactcontroller::class,'manage_contact']);
Route::post('/contact',[contactcontroller::class,'index']);
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product-single', function () {
    return view('frontend.product-single');
});

Route::get('/product-single/{id}',[productController::class,'edit_product']);

Route::get('/shop', function () {
    return view('frontend.shop');
});


Route::get('/shop',[productController::class,'viewall']);
Route::post('/shop/{id}',[cartcontroller::class,'cart']);

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});

Route::post('/shop/{id}',[wishlistController::class,'wishlist']);
Route::get('/wishlist',[wishlistController::class,'manage_wishlist']);

// Route::get('/login1', function () {
//     return view('frontend.login1');
// });
// Route::get('/registration', function () {
//     return view('frontend.registration');
// });

Route::group(['middleware'=>['beforelogin']],function(){
    
Route::post('/registration',[customercontroller::class,'index']);
Route::post('/login1',[customercontroller::class,'login']);
Route::get('/login1',[customercontroller::class,'login_page']);
Route::get('/registration',[customercontroller::class,'registration_page']);

});
// Route::get('/profile1', function () {
//     return view('frontend.profile1');
// });
Route::group(['middleware'=>['afterlogin']],function(){
Route::get('/profile1',[customercontroller::class,'profile1']);
Route::get('/editprofile1/{id}',[customerController::class,'edit_profile1']);
Route::post('/editprofile1/{id}',[customerController::class,'update_profile1']);
Route::get('/logout1',[customercontroller::class,'logout']);
});



//============================================================
// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// });

// Route::get('/add_category', function () {
//     return view('backend.add_category');
// });

// Route::get('/manage_contact',[contactcontroller::class,'manage_contact']);
// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

Route::group(['middleware'=>['afteradminlogin']],function(){
Route::get('/add_category',[categoryController::class,'category']);   
Route::post('/add_category',[categoryController::class,'add_category']);
 Route::get('/manage_category',[categoryController::class,'manage_category']);
 Route::post('/manage_category',[categoryController::class,'manage_category']);
 Route::get('/edit_category/{id}',[categoryController::class,'edit']);
 Route::post('/edit_category/{id}',[categoryController::class,'update']);
 Route::get('/delete_category/{id}',[categoryController::class,'destroy']);

 Route::post('/add_product',[productController::class,'add_product']);
 Route::get('/add_product',[productController::class,'index']);
 Route::get('/manage_product',[productController::class,'manage_product']);
 Route::post('/manage_product',[productController::class,'manage_product']);
 Route::get('/edit_product/{id}',[productController::class,'edit']);
 Route::post('/edit_product/{id}',[productController::class,'update']); 
 Route::get('/delete_product/{id}',[productController::class,'destroy']);
 Route::get('/product_status/{id}',[productController::class,'product_status']);

 Route::get('/dashboard',[adminController::class,'dashboard']);
 Route::get('/logout',[adminController::class,'logout']);
});


 Route::group(['middleware'=>['beforeadminlogin']],function(){

      
 Route::post('/register',[adminController::class,'index']);
 Route::post('/login',[adminController::class,'login']);
 Route::get('/login',[adminController::class,'login_admin']);
 Route::get('/register',[adminController::class,'register_admin']);

 });
 

//  Route::get('/register', function () {
//     return view('backend.register');
// });
// Route::get('/login', function () {
//     return view('backend.login');
// });