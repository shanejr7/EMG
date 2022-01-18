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


// ADMIN PAGE <admin>
// Route::get('/admin',[PortalController::class,'createAdmin'])->middleware('admin');
Route::get('/adminNotifications',[PortalController::class,'createAdmin'])->middleware('admin');
Route::get('/adminAccount',[PortalController::class,'viewAccount'])->middleware('admin');
Route::get('/adminClients',[PortalController::class,'viewClients'])->middleware('admin');
Route::get('/adminTaxes',[PortalController::class,'viewTaxSubmission'])->name('adminTaxes')->middleware('admin');

//ADMIN RESPONSE ROUTE <admin>
Route::post('/submitReturn', [PortalController::class,'submitTaxRequest'])->middleware('admin');


// TAX DASHBOARD REQUEST ROUTE <403>
Route::get('/dashboard', [PortalController::class,'createDashboard']);
Route::get('/account', [PortalController::class,'createAccount']);
Route::get('/ClientPortal', [PortalController::class,'createClientPortal']);
Route::get('/TaxPortal', [PortalController::class,'createTaxPortal'])->name('TaxPortal');


// TAX DASHBOARD RESPONSE ROUTE <403>
Route::delete('/remove-notification/{notification}', [PortalController::class,'removeUserNotification']);
Route::post('/account-update/{attribute}', [PortalController::class,'accountUpdateSubmission']);
Route::post('/client-business-information', [PortalController::class,'clientFormSubmission']);
Route::post('/tax-submission', [PortalController::class,'taxFormSubmission']);
Route::post('/taxApprove', [PortalController::class,'approveTaxRequest']);



// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);


// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/registration', [RegisterController::class, 'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);


// USER LOGOUT & DESTROY SESSION
Route::post('/logout',[SessionController::class, 'destroy']);

