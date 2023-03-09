<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// **** Backend Route Start ****
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [BackendController::class, 'login'])->name('login');

Route::post('/admin-dashboard', [BackendController::class, 'show_dashboard'])->name('show_dashboard');
// **** Backend Route End ****


// **** Frontend Route Start ****
Route::get('/', [FrontendController::class, 'welcome'])->name('index');
// **** Frontend Route End ****
