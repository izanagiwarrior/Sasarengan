<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// LOGIN
Auth::routes();

// READER
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/trytowrite', [HomeController::class, 'trytowrite'])->name('trytowrite');

Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/order', [HomeController::class, 'order'])->name('order');

Route::get('/orderDetail/{id}', [HomeController::class, 'addDetail'])->name('content.orderDetail');

Route::post('/orderDetail', [HomeController::class, 'orderDetail'])->name('orderDetail');

Route::get('/history', [HomeController::class, 'history'])->name('history');

// ADMIN

Route::get('/trytoread', [HomeController::class, 'trytoread'])->name('trytoread');

Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::get('/orderEvent', [HomeController::class, 'add']);

Route::post('/orderEvent', [HomeController::class, 'orderEvent'])->name('orderEvent');

Route::get('/updateEvent/{id}', [HomeController::class, 'update'])->name('content.updateEvent');

Route::post('/updateEvent/{id}', [HomeController::class, 'updateEvent'])->name('updateEvent');

Route::post('/delete', [HomeController::class, 'delete'])->name('content.deleteEvent');