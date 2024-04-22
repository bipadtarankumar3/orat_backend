<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ReferralController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SettingController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('enquiry', [AdminAuthController::class, 'enquiry']);
    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('list', [ProductController::class, 'productList']);
        Route::get('add', [ProductController::class, 'addProduct']);
        Route::get('category', [ProductController::class, 'category']);
        Route::get('attributes', [ProductController::class, 'attributes']);
    });

    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('list', [CustomerController::class, 'customerList']);
        Route::get('overview', [CustomerController::class, 'overview']);
        Route::get('security', [CustomerController::class, 'security']);
        Route::get('address_and_billing', [CustomerController::class, 'address_and_billing']);
        Route::get('notification', [CustomerController::class, 'notification']);
    });

    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('list', [OrderController::class, 'orderList']);
        Route::get('details', [OrderController::class, 'details']);
    });

    Route::group(['prefix' => 'referral', 'as' => 'referral.'], function () {
        Route::get('list', [ReferralController::class, 'referralList']);
        Route::get('add', [ReferralController::class, 'addreferral']);
    });

    Route::group(['prefix' => 'review', 'as' => 'review.'], function () {
        Route::get('list', [ReviewController::class, 'reviewList']);
        Route::get('add', [ReviewController::class, 'addreview']);
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('store', [SettingController::class, 'store']);
        Route::get('pyments', [SettingController::class, 'pyments']);
        Route::get('checkout', [SettingController::class, 'checkout']);
        Route::get('shipping_and_delivery', [SettingController::class, 'shipping_and_delivery']);
        Route::get('location', [SettingController::class, 'location']);
        Route::get('notification', [SettingController::class, 'notification']);
    });

});
