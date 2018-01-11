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
    Route::get('/buyer-request', function () { return view('buyer-request');}) ->name('buyer-request');
    Route::get('/buyer-signup', function () { return view('buyer-signup');})->name('buyer-signup');
    Route::get('/enquiry', function () { return view('enquiry');})->name('enquiry');
    Route::get('/', function () { return view('index');});
    Route::get('/home', function () { return view('index');}) ->name('home');
    Route::get('/login', function () { return view('login');})->name('login');
    Route::get('/offer-accepted', function () { return view('offer-accepted');})->name('offer-accepted');
    Route::get('/offer-received', function () { return view('offer-received');})->name('offer-received');
    Route::get('/order-accepted-list', function () { return view('order-accepted-list');})->name('order-accepted-list');
    Route::get('/order-offer-list', function () { return view('order-offer-list');})->name('order-offer-list');
    Route::get('/order-detail', function () { return view('order-detail');})->name('order-detail');
    Route::get('/retail-category', function () { return view('retail-category-page');})->name('retail-category');
    Route::get('/retail-home', function () { return view('retailer-home-page');})->name('retail-home');
    Route::get('/select-type', function () { return view('select-type');})->name('select-type');
    Route::get('/seller-signup', function () { return view('seller-signup');})->name('seller-signup');
    Route::get('/shopping-bag', function () { return view('shopping-bag');})->name('shopping-bag');
    Route::get('/supplies', function () { return view('supplies-page');})->name('supplies');
    Route::get('/whole-seller-home', function () { return view('whole-seller-home');})->name('whole-seller-home');
    Route::get('/whole-seller-category', function () { return view('whole-seller-category');})->name('whole-seller-category');
    Route::get('/wishlist', function () { return view('wishlist-page');})->name('wishlist');
    Route::get('/p', function () { return view('practice');})->name('p');

    Route::get('/master', function () { return view('layouts.master');})->name('master');

    Route::post('/createUser', ['uses' => 'UserController@create', 'as' => 'create.User']);
    Route::post('/uploadImg', ['uses' => 'UserController@uploadImg', 'as' => 'upload.Img']);

});

Auth::routes();

