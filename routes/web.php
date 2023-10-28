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

Route::get('/about-us', [AuthController::class, 'aboutus'])->name('about-us');
Route::get('quote-compare', [AuthController::class, 'quotecompare'])->name('quote-compare');



// super visa post
Route::get('/super-visa', [AuthController::class, 'supervisa'])->name('super-visa');
Route::post('super-visa-post', [AuthController::class, 'supervisaPost'])->name('super-visa-post');


Route::get('/quotes', [AuthController::class, 'quotation'])->name('quotes');
Route::get('single-detect-quotation', [AuthController::class, 'singleDetectQuotation'])->name('single-detect-quotation');
Route::get('/plan', [AuthController::class, 'insuranceplan'])->name('plan');
Route::post('find-quotation', [AuthController::class, 'findQuotation'])->name('find-quotation');
Route::post('deductible_filter', [AuthController::class, 'deductibleFilter'])->name('deductible_filter');


Route::post('super-visa-deductible-couple', [AuthController::class, 'superVisaDeductibleCouple'])->name('super-visa-deductible-couple');
Route::get('super-visa-deductable-quotation', [AuthController::class, 'superVisaDeductibleQuotation'])->name('super-visa-deductable-quotation');
// visitor visa insurance
Route::get('visitor-visa-insurance', [AuthController::class, 'visitorVisa'])->name('visitor-visa-insurance');
Route::post('visitor-single-coverage-get-quotation', [AuthController::class, 'visitorSingleCoverageGetQuotation'])->name('visitor-single-coverage-get-quotationt');
Route::post('visitor-single-coverage-deductatble-get-quotation', [AuthController::class, 'visitorSingleCoverageDeductableGetQuotation'])->name('visitor-single-coverage-deductatble-get-quotation');
Route::get('visitor-single-deductable-quotation', [AuthController::class, 'visitorSingleDeductableQuotation'])->name('visitor-single-deductable-quotation');
// visitor couple
Route::post('visitor-couple-coverage-get-quotation', [AuthController::class, 'visitorCoupleCoverageGetQuotation'])->name('visitor-couple-coverage-get-quotationt');
Route::post('visitor-visa-deductible-couple', [AuthController::class, 'visitorVisaDeductibleCouple'])->name('visitor-visa-deductible-couple');
Route::get('visitor-visa-deductable-quotation', [AuthController::class, 'visitorVisaDeductibleQuotation'])->name('visitor-visa-deductable-quotation');

// visitor family
Route::post('visitor-family-coverage-get-quotation', [AuthController::class, 'visitorFamilyCoverageGetQuotation'])->name('visitor-family-coverage-get-quotation');
Route::post('visitor-family-deductible', [AuthController::class, 'visitorFamilyDeductible'])->name('visitor-family-deductible');
Route::get('visitor-family-deductable-quotation', [AuthController::class, 'visitorFamilyDeductibleQuotation'])->name('visitor-family-deductable-quotation');


// compare quotation
Route::post('compare-post', [AuthController::class, 'comparePost'])->name('compare-post');
Route::get('compare-quote', [AuthController::class, 'compareQuote'])->name('compare-quote');