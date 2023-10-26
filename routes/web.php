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
Route::get('/contact-us', [AuthController::class, 'contactus'])->name('contact-us');

Route::get('/blog', [AuthController::class, 'Blog'])->name('blog');

Route::get('/privacy-policy', [AuthController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [AuthController::class, 'termsconditions'])->name('terms-and-conditions');


Route::get('/quote-compare', [AuthController::class, 'quotecompare'])->name('quote-compare');
Route::get('/order', [AuthController::class, 'Order'])->name('order');
Route::get('/order-confirmation', [AuthController::class, 'OrderConfirmation'])->name('order-confirmation');

//Blog Page start
Route::get('/3-effective-ways-to-pay-off-your-student-loan', [AuthController::class, 'EffectiveWays'])->name('3-effective-ways-to-pay-off-your-student-loan');



//Blog Page End


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