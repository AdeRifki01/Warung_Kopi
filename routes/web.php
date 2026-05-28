<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/booking', function () {
    return view('pages.booking');
});



use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart/remove/{id}', [CartController::class, 'remove']);

use App\Http\Controllers\CheckoutController;

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/clear-cart', function () {
    session()->forget('cart');

    return redirect('/');
});