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


Route::middleware(['GlobalUser:global'])->group(function () {
    Route::get('/', 'Customer\DisplayController@index')->name('customer.view.index');
    Route::get('about', 'Customer\DisplayController@about')->name('customer.view.about'); 
    Route::get('category', 'Customer\DisplayController@category')->name('customer.view.category'); 
    Route::get('product/{id}-{slug}', 'Customer\DisplayController@product')->name('customer.view.product'); 
    Route::get('contact', 'Customer\DisplayController@contact')->name('customer.view.contact'); 
    Route::get('cart', 'Customer\DisplayController@cart')->name('customer.view.cart'); 
    Route::get('checkout', 'Customer\DisplayController@checkout')->name('customer.view.checkout'); 

    Route::get('rule-agreement', 'Customer\DisplayController@rule_agreement')->name('customer.view.rule_agreement'); 
    Route::get('rule-buy', 'Customer\DisplayController@rule_buy')->name('customer.view.rule_buy'); 
    Route::get('rule-order', 'Customer\DisplayController@rule_order')->name('customer.view.rule_order'); 
    Route::get('rule-pay', 'Customer\DisplayController@rule_pay')->name('customer.view.rule_pay'); 
    Route::get('rule-back', 'Customer\DisplayController@rule_back')->name('customer.view.rule_back'); 
    Route::get('rule-product', 'Customer\DisplayController@rule_product')->name('customer.view.rule_product'); 
    Route::get('rule-ship', 'Customer\DisplayController@rule_ship')->name('customer.view.rule_ship'); 
    Route::get('rule-privacy', 'Customer\DisplayController@rule_privacy')->name('customer.view.rule_privacy'); 
    Route::get('rule-recruit', 'Customer\DisplayController@rule_recruit')->name('customer.view.rule_recruit'); 

});

Route::middleware(['AuthCustomer:login'])->group(function () {
    Route::get('login', 'Customer\DisplayController@login')->name('customer.view.login'); 
    Route::get('register', 'Customer\DisplayController@register')->name('customer.view.register'); 
    Route::get('register-successful', 'Customer\DisplayController@register_successful')->name('customer.view.register.done'); 
});

Route::middleware(['AuthCustomer:logined'])->group(function () {
    Route::post('logout', 'Customer\AuthController@logout')->name('customer.logout');
    Route::get('profile', 'Customer\DisplayController@profile')->name('customer.view.profile'); 
});

Route::get('checkout-login', 'Customer\DisplayController@checkout_login')->name('customer.checkout_login');
Route::get('confirm', 'Customer\AuthController@confirm')->name('customer.confirm');
Route::get('confirm-invite', 'Customer\CollabController@confirm')->name('customer.invite.confirm');


Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () {
        Route::prefix('auth')->group(function () {
            Route::post('register', 'Customer\AuthController@register')->name('customer.auth.register');
            Route::post('login', 'Customer\AuthController@login')->name('customer.auth.login');
            Route::post('forgot', 'Customer\AuthController@forgot')->name('customer.auth.forgot');
            Route::post('reset', 'Customer\AuthController@reset')->name('customer.auth.reset');
            Route::post('code', 'Customer\AuthController@code')->name('customer.auth.code');
            Route::post('change', 'Customer\AuthController@change')->name('customer.auth.change');
            Route::post('update', 'Customer\AuthController@update')->name('customer.auth.update');
            Route::get('get-profile', 'Customer\AuthController@get_profile')->name('customer.auth.profile');
        }); 


        Route::prefix('category')->group(function () {
            Route::get('get', 'Customer\CategoryController@get')->name('customer.category.get');
        }); 
        Route::prefix('product')->group(function () {
            Route::get('get-all', 'Customer\ProductController@get_all')->name('customer.product.get.all');
            Route::get('get-trending', 'Customer\ProductController@get_trending')->name('customer.product.get.trending');
            Route::get('get-new-arrivals', 'Customer\ProductController@get_new_arrivals')->name('customer.product.get.new_arrivals');
            Route::get('get-top-view', 'Customer\ProductController@get_top_view')->name('customer.product.get.top_view');


            Route::get('get-discount', 'Customer\ProductController@get_discount')->name('customer.product.get.discount');
            Route::get('get-item-category/{id}', 'Customer\ProductController@get_item_category')->name('customer.product.get.item_category');

            Route::post('get-search', 'Customer\ProductController@get_search')->name('customer.product.get.search');
            Route::get('get-one/{id}', 'Customer\ProductController@get_one')->name('customer.product.get.one');
            Route::get('get-one-cart/{id}', 'Customer\ProductController@get_one_cart')->name('customer.product.get.cart');
            Route::get('get-recently/{item}', 'Customer\ProductController@get_recently')->name('customer.product.get.recently');
            Route::get('get-related/{id}', 'Customer\ProductController@get_related')->name('customer.product.get.related');
        });
        Route::prefix('cart')->group(function () {
            Route::get('get-cart', 'Customer\CartController@get')->name('customer.cart.get');
            Route::post('update', 'Customer\CartController@update')->name('customer.cart.update');
        }); 
        Route::prefix('order')->group(function () {
            Route::post('checkout', 'Customer\OrderController@checkout')->name('customer.order.checkout');
            Route::get('get', 'Customer\OrderController@get')->name('customer.order.get');
        });  
    });
});



Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});

Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@statistic')->name('admin.statistic.index');

        Route::prefix('category')->group(function () {
            Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');
        });
        Route::prefix('product')->group(function () {
            Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');
            Route::get('/update-price', 'Admin\ProductController@update_price')->name('admin.product.update_price');
        });


        Route::prefix('watermark')->group(function () {
            Route::get('/', 'Admin\DisplayController@watermark')->name('admin.watermark.index');
        });
        Route::prefix('warehouse')->group(function () {
            Route::get('/', 'Admin\WarehouseController@index')->name('admin.warehouse.index');
        });
        Route::prefix('order')->group(function () {
            Route::get('/', 'Admin\OrderController@index')->name('admin.order.index');
        });
        Route::prefix('manager')->group(function () {
            Route::get('/', 'Admin\ManagerController@index')->name('admin.manager.index');
        });
    });

    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\DisplayController@image')->name('admin.image.post');

        Route::prefix('category')->group(function () {
            Route::get('get', 'Admin\CategoryController@get')->name('admin.category.get');
            Route::get('/get-one/{id}', 'Admin\CategoryController@get_one')->name('admin.category.get_one');
            Route::post('store', 'Admin\CategoryController@store')->name('admin.category.store');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.category.update');
            Route::get('/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
        });



        Route::prefix('supplier')->group(function () {
            Route::get('get', 'Admin\SupplierController@get')->name('admin.supplier.get');
            Route::get('/get-one/{id}', 'Admin\SupplierController@get_one')->name('admin.supplier.get_one');
            Route::post('store', 'Admin\SupplierController@store')->name('admin.supplier.store');
            Route::post('/update', 'Admin\SupplierController@update')->name('admin.supplier.update');
            Route::get('/delete/{id}', 'Admin\SupplierController@delete')->name('admin.supplier.delete');
        });
        Route::prefix('product')->group(function () {
            Route::get('get', 'Admin\ProductController@get')->name('admin.product.get');
            Route::get('/get-one/{id}', 'Admin\ProductController@get_one')->name('admin.product.get_one');
            Route::post('store', 'Admin\ProductController@store')->name('admin.product.store');
            Route::put('/update-trending', 'Admin\ProductController@update_trending')->name('admin.product.trending.update');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.product.update');
            Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
        });
        Route::prefix('order')->group(function () {
            Route::get('get', 'Admin\OrderController@get')->name('admin.order.get');
            Route::get('get-one/{id}', 'Admin\OrderController@get_one')->name('admin.order.get_one');
            Route::post('/update', 'Admin\OrderController@update')->name('admin.order.update');
        });

        Route::prefix('warehouse')->group(function () {
            Route::get('get-item', 'Admin\WarehouseController@get_item')->name('admin.warehouse.item.get');
            Route::get('get-history', 'Admin\WarehouseController@get_history')->name('admin.warehouse.history.get');
            Route::get('get-order-fullfil', 'Admin\WarehouseController@get_order_fullfil')->name('admin.warehouse.item.get');
            Route::get('get-order-export', 'Admin\WarehouseController@get_order_export')->name('admin.warehouse.item.get');
            Route::get('get-order-shipping', 'Admin\WarehouseController@get_order_shipping')->name('admin.warehouse.item.get');

            Route::post('store', 'Admin\WarehouseController@store')->name('admin.warehouse.store');
            Route::get('/get-ware-one/{id}', 'Admin\WarehouseController@get_ware_one')->name('admin.warehouse.get_ware_one');

            Route::get('/get-one/{id}', 'Admin\ProductController@get_one')->name('admin.warehouse.get_one');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.warehouse.update');
        });

        Route::prefix('statistic')->group(function () {
            Route::get('get-total', 'Admin\OrderController@get_total')->name('admin.order.get_total');
            Route::get('get-best-sale', 'Admin\OrderController@get_best_sale')->name('admin.order.get_best_sale');
            Route::get('get-customer', 'Admin\OrderController@get_customer')->name('admin.order.get_customer');
        });

        Route::prefix('manager')->group(function () {
            Route::get('get', 'Admin\ManagerController@get')->name('admin.manager.get');
            Route::get('/get-one/{id}', 'Admin\ManagerController@get_one')->name('admin.manager.get_one');
            Route::post('store', 'Admin\ManagerController@store')->name('admin.manager.store');
            Route::post('/update', 'Admin\ManagerController@update')->name('admin.manager.update');
            Route::get('/delete/{id}', 'Admin\ManagerController@delete')->name('admin.manager.delete');
        });
    });
});