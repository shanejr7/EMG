<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
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
Route::get('/dashboard', [PortalController::class,'createDashboard'])->middleware('auth');
Route::get('/account', [PortalController::class,'createAccount'])->middleware('auth');
Route::get('/ClientPortal', [PortalController::class,'createClientPortal'])->middleware('auth');
Route::get('/TaxPortal', [PortalController::class,'createTaxPortal'])->middleware('auth');


// TAX DASHBOARD RESPONSE ROUTE
Route::delete('/remove-notification/{notification}', [PortalController::class,'removeUserNotification'])->middleware('auth');
Route::post('/account-update/{attribute}', [PortalController::class,'accountUpdateSubmission'])->middleware('auth');
Route::post('/client-business-information', [PortalController::class,'clientFormSubmission'])->middleware('auth');
Route::post('/tax-submission', [PortalController::class,'taxFormSubmission'])->middleware('auth');



// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);


// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/registration', [RegisterController::class, 'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);


// USER LOGOUT & DESTROY SESSION
Route::post('/logout',[SessionController::class, 'destroy']);

