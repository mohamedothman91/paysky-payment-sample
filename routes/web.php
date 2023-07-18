<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', function () {
  
    $payment = PaySky::makePayment(100000 , rand());
    return view('welcome' ,  ['payment' => $payment ]  );
});


Route::get('/completeCallback', function (Request $request) {
    echo('completeCallback');
})->name('paysky.payment.completeCallback');;


Route::get('/errorCallback', function (Request $request) {
    echo('errorCallback');
})->name('paysky.payment.errorCallback');

