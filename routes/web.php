<?php

use Illuminate\Support\Facades\Route;
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

// routes/web.php

Route::get('/admin/customers-management', [AdminController::class, 'customers']);
Route::get('/admin/customers-management/{operation}', [AdminController::class, 'customers']);
Route::get('/admin/customers-management/{operation}/{id}', [AdminController::class, 'customers']);
Route::post('/admin/customers-management', [AdminController::class, 'customers']);
Route::post('/admin/customers-management/{operation}', [AdminController::class, 'customers']);
Route::post('/admin/customers-management/{operation}/{id}', [AdminController::class, 'customers']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
