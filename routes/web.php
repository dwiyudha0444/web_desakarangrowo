<?php

use Illuminate\Support\Facades\Route;
//auth
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
//user
use App\Http\Controllers\user\HomeController;
//admin
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\BeritaAdminController;
use App\Http\Controllers\admin\AnggotaAdminController;
use App\Http\Controllers\admin\UserAdminController;
use App\Http\Controllers\admin\LinkytAdminController;

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

Route::resource('/home',HomeController::class);

//admin
Route::resource('/dashboard',DashboardAdminController::class)->middleware('auth');
Route::resource('/beritaa',BeritaAdminController::class)->middleware('auth');
Route::resource('/anggotaa',AnggotaAdminController::class)->middleware('auth');
Route::resource('/user',UserAdminController::class)->middleware('auth');
Route::resource('/linkyt',LinkytAdminController::class)->middleware('auth');

Route::get('/anggotaa-edit/{id}',[AnggotaAdminController::class,'edit'])->middleware('auth');
Route::get('/beritaa-edit/{id}',[BeritaAdminController::class,'edit'])->middleware('auth');
Route::get('/user-edit/{id}',[UserAdminController::class,'edit'])->middleware('auth');
Route::get('/linkyt-edit/{id}',[LinkytAdminController::class,'edit'])->middleware('auth');

//client
Route::resource('/home',HomeController::class);


Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::resource('register',RegisterController::class);