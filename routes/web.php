<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginConroller;
use App\Http\Controllers\Backend\DashboardController;

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
    return view('frontend.main');
});


// Admin login

 Route::get('admin/login',[LoginConroller::class,'LoginView'])->name("admin.login");
 Route::post('admin/loginpost',[LoginConroller::class,'loginPost'])->name('admin.login.post');

 Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
 {

    Route::get('dashboard',[DashboardController::class,'DashboardView'])->name('admin.dashboard');
    Route::get('adminlogout',[LoginConroller::class,'logout'])->name('adminlogout');
 });
