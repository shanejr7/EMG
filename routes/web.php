<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;



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


// EMG HOME PAGE ROUTE
Route::get('/', function () {
    return view('/emg-main/web/MalexHTML/App/dist/index');
})->middleware('guest');


// TAX DASHBOARD REQUEST ROUTE
Route::get('/dashboard', [TaxController::class,'createDashboard'])->middleware('auth');


// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);


// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/registration', [RegisterController::class, 'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);


// USER LOGOUT & DESTROY SESSION
Route::post('/logout',[SessionController::class, 'destroy']);

