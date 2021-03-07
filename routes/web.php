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

Route::get('/', [TestController::class, 'indexGet']);
Route::post('/details', [TestController::class, 'indexPost']);

Route::get('details', [TestController::class, 'detailsGet']);
// Route::post('/', [TestController::class, 'detailsPost']);

Route::get('entry', [TestController::class, 'entryGet']);
Route::post('/', [TestController::class, 'entryPost']);

Route::get('work_past', [TestController::class, 'work_pastGet']);
Route::post('/', [TestController::class, 'work_pastPost']);

Route::get('staff_info', [TestController::class, 'staff_infoGet']);
Route::post('/', [TestController::class, 'staff_infoPost']);

Route::get('payslips', [TestController::class, 'payslipsGet']);
Route::post('/', [TestController::class, 'payslipsPost']);

Route::get('payslips_duration', [TestController::class, 'payslips_durationGet']);
Route::post('/', [TestController::class, 'payslips_durationPost']);

Route::get('contact_form', [TestController::class, 'contact_formGet']);
Route::post('contact_form', [TestController::class, 'contact_formPost']);

// Route::get('/', 'TestController@');
// Route::post('/', 'TestController@');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
