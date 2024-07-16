<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

// Login And Registeration Route ///
Route::group(['middleware'=>'guest'],function(){
    Route::get('register',[LoginController::class,'Register'])->name('register');
    Route::post('registers',[LoginController::class,'Registers'])->name('registers')->middleware('throttle:2,1');
    Route::get('login',[LoginController::class,'Login'])->name('login');
    Route::post('logins',[LoginController::class,'Logins'])->name('logins')->middleware('throttle:2,1');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[LoginController::class,'wellcome'])->name('home');
    Route::get('Product',[ProductController::class,'Product'])->name('Product');
    Route::get('productshow',[ProductController::class,'Productshow'])->name('productshow');
    Route::get('logout',[LoginController::class,'Logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    // other admin routes...
});


Route::post('productpost',[ProductController::class,'Productpost'])->name('productpost');
