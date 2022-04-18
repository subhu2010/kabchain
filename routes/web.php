<?php

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

Route::get('/', function () {
    return view('frontend.home.home');
});

Route::get('home', function () {
    return view('frontend.home.home');
});

Route::get('blog', function () {
    return view('frontend.pages.blog');
});

Route::get('blog-detail', function () {
    return view('frontend.pages.blog-detail');
});

Route::get('shop', function () {
    return view('frontend.pages.shop');
});

Route::get('single-product', function () {
    return view('frontend.pages.single-product');
});

Route::get('link', function () {
    return view('frontend.link.link');
});

Route::get('privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
});

Route::get('return-policy', function () {
    return view('frontend.pages.return-policy');
});

Route::get('cooperation-information', function () {
    return view('frontend.pages.cooperation');
});

Route::get('terms-and-condition', function () {
    return view('frontend.pages.tac');
});

Route::get('faq', function () {
    return view('frontend.pages.faq');
});

Route::get('disclaimer', function () {
    return view('frontend.pages.disclaimer');
});

Route::get('cancellation', function () {
    return view('frontend.pages.cancellation');
});

Route::get('payment', function () {
    return view('frontend.pages.payment');
});

Route::get('shipping', function () {
    return view('frontend.pages.shipping');
});

Route::get('cart', function () {
    return view('frontend.pages.cart');
});

Route::get('wishlist', function () {
    return view('frontend.pages.wishlist');
});

Route::get('about-us', function () {
    return view('frontend.pages.about');
});

Route::get('contact-us', function () {
    return view('frontend.pages.contact');
});

Route::get('career', function () {
    return view('frontend.pages.carrer');
});

Route::get('career-detail', function () {
    return view('frontend.pages.career-detail');
});

Route::get('login', function () {
    return view('frontend.pages.login');
});

Route::get('register', function () {
    return view('frontend.pages.register');
});

Route::get('reset-password', function () {
    return view('frontend.pages.reset-pwd');
});




// user dashboard
Route::get('user-dashboard', function () {
    return view('frontend.user-dashboard.user-dashboard');
});

Route::get('user-order', function () {
    return view('frontend.user-dashboard.user-order');
});

Route::get('view-order', function () {
    return view('frontend.user-dashboard.view-order');
});

Route::get('user-address', function () {
    return view('frontend.user-dashboard.user-address');
});

Route::get('user-account', function () {
    return view('frontend.user-dashboard.user-account');
});




Route::get('link', function () {
    return view('frontend.link.link');
});