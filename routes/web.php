<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

/*
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


*/



/*Route::view('/register','register');
Route::post("/register",[AdminController::class,'register']);
Route::post("/login",[AdminController::class,'login']);
//Route::get("/",[HomeController::class,'index']);
//Route::get("/detail/{id}",[HomeController::class,'detail']);
Route::get("/patient",[PatientController::class,'index']);
Route::get("/doctor",[DoctorController::class,'index']);
*/