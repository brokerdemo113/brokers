<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginConroller;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ForgotPasswordController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\BrokerDetailsController;

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
 Route::get('forgotPassword',[ForgotPasswordController::class ,'forgotPassword'])->name('forgotPassword');
 Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
 Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

 Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function()
 {

    Route::get('dashboard',[DashboardController::class,'DashboardView'])->name('admin.dashboard');
    Route::get('adminlogout',[LoginConroller::class,'logout'])->name('adminlogout');
    Route::get('profile',[ProfileController::class,'Profile'])->name('dashbard.profile');
    Route::get('brokerdetails',[BrokerDetailsController::class,'BrokerDetails'])->name('broker.details');
    Route::post('brokerdetailspost',[BrokerDetailsController::class,'BrokerDetailsPost'])->name('broker.details.post');
 });

