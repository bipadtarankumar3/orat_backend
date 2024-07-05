<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ReferralController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\InvoiceController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\admin\ExhibitionController;
use App\Http\Controllers\admin\GiftController;
use App\Http\Controllers\admin\ReportsController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('enquiry', [AdminAuthController::class, 'enquiry']);
    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('list', [ProductController::class, 'productList']);
        Route::get('add', [ProductController::class, 'addProduct']);

        //--------------------- Category -----------------------
        Route::get('category', [ProductController::class, 'category']);
        Route::get('add_category_form_html', [ProductController::class, 'add_category_form_html']);
        Route::post('add_category', [ProductController::class, 'add_category']);
        Route::get('edit_category', [ProductController::class, 'edit_category']);
        Route::get('delete_category/{id}', [ProductController::class, 'delete_category']);
        //--------------------- Category End -----------------------

        //--------------------- Sub Category -----------------------
        Route::get('sub_category', [ProductController::class, 'sub_category']);
        Route::get('add_sub_category_form_html', [ProductController::class, 'add_sub_category_form_html']);
        Route::post('add_sub_category', [ProductController::class, 'add_sub_category']);
        Route::get('edit_sub_category', [ProductController::class, 'edit_sub_category']);
        Route::get('delete_sub_category/{id}', [ProductController::class, 'delete_sub_category']);
        //--------------------- Sub Category End -----------------------


        Route::get('attributes', [ProductController::class, 'attributes']);
        Route::get('inventory', [ProductController::class, 'inventory']);
        Route::get('product_price', [ProductController::class, 'product_price']);
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
        Route::get('status', [OrderController::class, 'status']);
        Route::get('update_status', [OrderController::class, 'update_status']);
        Route::get('user_order_list', [OrderController::class, 'user_order_list']);
    });

    Route::group(['prefix' => 'referral', 'as' => 'referral.'], function () {
        Route::get('list', [ReferralController::class, 'referralList']);
        Route::get('add', [ReferralController::class, 'addreferral']);
    });

    Route::group(['prefix' => 'review', 'as' => 'review.'], function () {
        Route::get('list', [ReviewController::class, 'reviewList']);
        Route::get('add', [ReviewController::class, 'addreview']);
    });
    Route::group(['prefix' => 'query', 'as' => 'query.'], function () {
        Route::get('list', [ReviewController::class, 'queryList']);
        Route::get('add', [ReviewController::class, 'addreview']);
    });
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('list', [BannerController::class, 'bannerList']);
        Route::get('add_banner_form_html', [BannerController::class, 'add_banner_form_html']);
        Route::post('add_banner', [BannerController::class, 'add_banner']);
        Route::get('edit_banner', [BannerController::class, 'edit_banner']);
        Route::get('delete/{id}', [BannerController::class, 'delete']);
    });
    Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
        Route::get('sales', [ReportsController::class, 'salesReport']);
        Route::get('product', [ReportsController::class, 'productReport']);
        Route::get('payment', [ReportsController::class, 'paymentReport']);
    });
    Route::group(['prefix' => 'exhibition', 'as' => 'exhibition.'], function () {
        Route::get('list', [ExhibitionController::class, 'list']);
        Route::get('query', [ExhibitionController::class, 'query']);
        Route::get('inventory', [ExhibitionController::class, 'inventory']);
        Route::get('/user/list', [ExhibitionController::class, 'ExhibitionUserlist']);
        Route::get('create/user', [ExhibitionController::class, 'createUser']);
        Route::get('sales/list', [ExhibitionController::class, 'sales_list']);
        Route::get('sales/create', [ExhibitionController::class, 'sales_create']);
        Route::get('expense', [ExhibitionController::class, 'expense']);
        Route::get('product', [ReportsController::class, 'productReport']);
        Route::get('payment', [ReportsController::class, 'paymentReport']);


        Route::get('model', [ExhibitionController::class, 'model_list']);
        Route::get('staff', [ExhibitionController::class, 'staff_list']);
        Route::get('owner', [ExhibitionController::class, 'owner_list']);
        Route::get('others', [ExhibitionController::class, 'others_list']);
    });

    Route::group(['prefix' => 'payment', 'as' => 'payment.'], function () {
        Route::get('list', [PaymentController::class, 'paymentList']);
    });

    Route::group(['prefix' => 'invoice', 'as' => 'invoice.'], function () {
        Route::get('list', [InvoiceController::class, 'invoiceList']);
        Route::get('details', [InvoiceController::class, 'invoicedetails']);
    });

    Route::group(['prefix' => 'discount', 'as' => 'discount.'], function () {
        Route::get('list', [DiscountController::class, 'discountList']);
        Route::get('add_discount_form_html', [DiscountController::class, 'add_discount_form_html']);
        Route::post('add_discount', [DiscountController::class, 'add_discount']);
        Route::get('edit_discount', [DiscountController::class, 'edit_discount']);
        Route::get('delete_discount/{id}', [DiscountController::class, 'delete_discount']);
    });

    Route::group(['prefix' => 'gift', 'as' => 'gift.'], function () {
        Route::get('list', [GiftController::class, 'giftList']);
        Route::get('add_gift_form_html', [GiftController::class, 'add_gift_form_html']);
        Route::post('add_gift', [GiftController::class, 'add_gift']);
        Route::get('edit_gift', [GiftController::class, 'edit_gift']);
        Route::get('delete_gift/{id}', [GiftController::class, 'delete_gift']);
     
    });

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('profile', [SettingController::class, 'profile']);
        Route::get('cms', [SettingController::class, 'cms']);
        Route::get('store', [SettingController::class, 'store']);
        Route::get('pyments', [SettingController::class, 'pyments']);
        Route::get('checkout', [SettingController::class, 'checkout']);
        Route::get('shipping_and_delivery', [SettingController::class, 'shipping_and_delivery']);
        Route::get('location', [SettingController::class, 'location']);
        Route::get('notification', [SettingController::class, 'notification']);
    });

});
