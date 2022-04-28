<?php

use App\Http\Controllers\Details\AcademicController;
use App\Http\Controllers\Details\PersonalController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*Auth ROUTES*************************************
*******/
Route::get('/', [LoginController::class, 'index'])->name('home');
Route::get('/dashboard-admin',[LoginController::class,'admin_dash'])->name('admin_dash')->middleware('admin');


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login-submit',[LoginController::class,'login_submit'])->name('login_submit');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-submit',[LoginController::class,'register_submit'])->name('register_submit');
Route::get('/verify-email/{token}/{email}',[LoginController::class,'verify_mail']);

Route::get('/forgot-password',[LoginController::class,'forgot_password'])->name('forgot_password');
Route::post('forget-password-submit',[LoginController::class,'forget_password_submit'])->name('forget_password_submit');

Route::get('/reset-password/{token}/{email}',[LoginController::class,'reset_password'])->name('reset_password');
Route::post('/reset-password-submit',[LoginController::class,'reset_password_submit'])->name('reset_password_submit');


Route::get('/dashboard-user',[LoginController::class,'user_dash'])->name('user_dash')->middleware('auth');
Route::get('/admin/settings',[LoginController::class,'settings'])->name('settings')->middleware('admin');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

/*Personal Details*************************************
*******/
Route::resource('details',PersonalController::class)->middleware('auth');
Route::resource('academic',AcademicController::class)->middleware('auth');

// Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard-user',[LoginController::class,'user_dash'])->name('user_dash')->middleware('auth:auth');

// });

