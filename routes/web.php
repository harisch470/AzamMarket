<?php

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


Route::group(['Basics'], function () {
    Route::get('/buyer-request', function () { return view('buyer-request');});
    Route::get('/buyer-signup', function () { return view('buyer-signup');});
    Route::get('/enquiry', function () { return view('enquiry');});
    Route::get('/', function () { return view('index');});
    Route::get('/home', function () { return view('index');});
    Route::get('/login', function () { return view('login');});
    Route::get('/offer-accepted', function () { return view('offer-accepted');});
    Route::get('/offer-received', function () { return view('offer-received');});
    Route::get('/order-accepted-list', function () { return view('order-accepted-list');});
    Route::get('/order-offer-list', function () { return view('order-offer-list');});
    Route::get('/order-detail', function () { return view('order-detail');});
    Route::get('/retail-category', function () { return view('retail-category-page');});
    Route::get('/retail-home', function () { return view('retailer-home-page');});
    Route::get('/select-type', function () { return view('select-type');});
    Route::get('/seller-signup', function () { return view('seller-signup');});
    Route::get('/shopping-bag', function () { return view('shopping-bag');});
    Route::get('/supplies', function () { return view('supplies-page');});
    Route::get('/whole-seller-home', function () { return view('whole-seller-home');});
    Route::get('/whole-seller-category', function () { return view('whole-seller-category');});
    Route::get('/wishlist', function () { return view('wishlist-page');});

    Route::get('/master', function () { return view('layouts.master');});

});
