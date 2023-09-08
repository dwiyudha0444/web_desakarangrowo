<?php

use Illuminate\Support\Facades\Route;
//auth
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
//user
use App\Http\Controllers\user\HomeController;

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

//admin
Route::resource('/dashboard',DashboardAdminController::class)->middleware('auth');

//client
Route::resource('/home',HomeController::class);


Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::resource('register',RegisterController::class);