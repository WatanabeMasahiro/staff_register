<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'indexGet'])->middleware('auth');
Route::post('/details', [TestController::class, 'detailsPost'])->middleware('auth');

Route::get('entry', [TestController::class, 'entryGet'])->middleware('auth');
Route::post('/entry', [TestController::class, 'entryPost']);

Route::get('work_past', [TestController::class, 'work_pastGet'])->middleware('auth');
Route::post('/', [TestController::class, 'work_pastPost']);

Route::get('payslips', [TestController::class, 'payslipsGet'])->middleware('auth');
// Route::post('/', [TestController::class, 'payslipsPost'])->middleware('auth');

// Route::get('payslips_duration', [TestController::class, 'payslips_durationGet'])->middleware('auth');
Route::post('/payslips_duration', [TestController::class, 'payslips_durationPost'])->middleware('auth');

Route::get('staff_info', [TestController::class, 'staff_infoGet'])->middleware('auth');
Route::post('/', [TestController::class, 'staff_infoPost']);

Route::get('contact_form', [TestController::class, 'contact_formGet'])->middleware('auth');
Route::post('contact_form', [TestController::class, 'contact_formPost']);

// Route::get('/', 'TestController@');
// Route::post('/', 'TestController@');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
