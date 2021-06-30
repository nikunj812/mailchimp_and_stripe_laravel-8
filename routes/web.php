<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailChimpController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;

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

Route::get('/', function () {
    return view('welcome');
});

//mailchimp
Route::post('/mailChimp',[MailChimpController::class,'mailChimp']);

//stripe
Route::get('stripe', [StripePaymentController::class,'stripe']);
Route::post('stripe', [StripePaymentController::class,'stripePost'])->name('stripe.post');

Route::get('payment', [PayPalController::class,'payment'])->name('payment');
Route::get('cancel', [PayPalController::class,'cancel'])->name('payment.cancel');
Route::get('payment/success', [PayPalController::class,'success'])->name('payment.success');