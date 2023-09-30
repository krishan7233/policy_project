<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', [AuthController::class, 'index']);
Route::get('/super-visa', [AuthController::class, 'supervisa'])->name('super-visa');
Route::get('/quotes', [AuthController::class, 'quotation'])->name('quotes');
Route::get('/plan', [AuthController::class, 'insuranceplan'])->name('plan');
Route::post('find-quotation', [AuthController::class, 'findQuotation'])->name('find-quotation');
