<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\patientController;

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


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('/register_doctor', function () {
    return view('backend.register_doctor');
});

Route::get('/login_doctor', function () {
    return view('backend.login_doctor');
}); 

Route::post('/register_doctor',[doctorController::class,'register_doc']);
Route::post('/login_doctor',[doctorController::class,'login']);
Route::get('/logout1',[doctorController::class,'logout1']);


// Route::get('/profile', function () {
//     return view('frontend.profile');
// });


Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/index',[patientController::class,'create']);

Route::get('/doctor', function () {
    return view('frontend.doctor');
});
Route::get('/doctor',[patientController::class,'doctor']);
Route::get('/appointment_form', function () { 
    return view('frontend.appointment_form');
});
 
Route::get('/profile',[patientController::class,'profile']);
Route::get('/edit_profile/{id}',[patientController::class,'edit_profile']);
Route::post('/edit_profile/{id}',[patientController::class,'update_profile']);


Route::post('/appointment_form',[patientController::class,'appointment']);
Route::get('/manage_appointment',[doctorController::class,'manage']);
Route::get('/edit_app/{id}',[doctorController::class,'edit']);
Route::post('/edit_app/{id}',[doctorController::class,'update']);
Route::get('/delete_app/{id}',[doctorController::class,'destroy']);
Route::get('/book_appointment',[doctorController::class,'manage_doctor']);
Route::get('/other_doctor',[doctorController::class,'other_doctor']);
Route::get('/all_doctor',[doctorController::class,'all_doctor']);

Route::get('/register', function () {
    return view('frontend.register');
});
Route::post('/register',[patientController::class,'patient_register']);

Route::get('/login', function () {
    return view('frontend.login');
});
Route::post('/login',[patientController::class,'patient_login']);
Route::get('/logout',[patientController::class,'logout']);



