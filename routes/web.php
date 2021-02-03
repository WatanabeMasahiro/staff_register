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

Route::get('details', [TestController::class, 'detailsGet']);

Route::get('confirm', [TestController::class, 'confirmGet']);

Route::get('work_past', [TestController::class, 'work_pastGet']);

Route::get('contact_form', [TestController::class, 'contact_formGet']);



// Route::get('/', 'TestController@');
// Route::post('/', 'TestController@');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
