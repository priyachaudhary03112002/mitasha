<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\wishlistController;
use App\Http\Controllers\blogController;
use App\Models\cart;
use App\Models\wishlist;

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
    $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();       
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish= $wish_data->count(); 
       return view('frontend.about',['total_cart'=>$total_cart,'total_wish'=>$total_wish]);
    
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
Route::post('/product_single/{id}',[cartcontroller::class,'cart']);
Route::get('/cart/{id}',[cartcontroller::class,'delete_cart']);
 //Route::post('/cart/{id}',[cartcontroller::class,'update_cart']);


Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::post('/manage_contact',[contactcontroller::class,'manage_contact']);   
Route::get('/manage_contact',[contactcontroller::class,'manage_contact']);
Route::post('/contact',[contactcontroller::class,'index']);
Route::get('/contact', function () {
    $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();  
    $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
    $total_wish= $wish_data->count(); 
    return view('frontend.contact',['total_cart'=>$total_cart,'total_wish'=>$total_wish]);
});

Route::get('/product_single', function () {
    return view('frontend.product_single');
}); 
//Route::get('/product_single/{id}',[productController::class,'random_single']);
Route::get('/product_single/{id}',[productController::class,'edit_product']);
Route::get('/index',[productController::class,'random_product']);
Route::get('/',[productController::class,'random_product']);
Route::post('/index/{id}',[wishlistController::class,'wishlist']);

Route::get('/shop', function () {
    return view('frontend.shop');
});


Route::get('/shop',[productController::class,'viewall']);
Route::post('/shop/{id}',[cartcontroller::class,'cart']);
Route::get('/product_page/{id}',[productController::class,'product_category']);

// Route::get('/wishlist', function () {
//     return view('frontend.wishlist');
// });

Route::post('/shop/{id}',[wishlistController::class,'wishlist']);
Route::get('/wishlist',[wishlistController::class,'manage_wishlist']);
Route::get('/wishlist/{id}',[wishlistController::class,'destroy']);

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
Route::get('/manage_cart',[cartController::class,'cart_report']);
 Route::get('/add_blog', function () {
     return view('backend.add_blog');
});
Route::post('/add_blog',[blogController::class,'add_blog']);
Route::get('/manage_blog',[blogController::class,'manage_blog']);
 Route::get('/edit_blog/{id}',[blogController::class,'edit_blog']);
 Route::post('/edit_blog/{id}',[blogController::class,'blog_update']); 
 Route::get('/delete_blog/{id}',[blogController::class,'destroy']);

 Route::get('/blog',[blogController::class,'viewall']);
 Route::get('/blog-single/{id}',[blogController::class,'singleblog_edit']);

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