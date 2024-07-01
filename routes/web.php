<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('register',[LoginController::class,'Register'])->name('register');
Route::post('registers',[LoginController::class,'Registers'])->name('registers');
Route::get('login',[LoginController::class,'Login'])->name('login');
Route::post('logins',[LoginController::class,'Logins'])->name('logins');
Route::get('home',[LoginController::class,'wellcome'])->name('home');
