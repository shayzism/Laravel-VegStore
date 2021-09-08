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
//ADMIN ROUTING
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/panel','HomeController@index')->name('admin.home');

//    AUTH
    Route::get('/sign_up','RegisterController@index')->name('signup.form');
    Route::post('/sign_up','RegisterController@admin_register')->name('signup');
    Route::get('/sign_in','LoginController@showLoginForm')->name('signin.form');
    Route::post('/sin_in', 'LoginController@login')->name('signin');
    Route::get('/forget', function () {
        return view('admin.partials.forgetpassword');
    });
//    END AUTH



//STATUSl
    Route::get('/panel/seller_status', function () {
        return view('admin.vaziat.seller');
    });
    Route::get('/panel/customer_status', function () {
        return view('admin.vaziat.user');
    });
//END STATUS



//    REQUESTS
    Route::get('/panel/seller_request', function () {
        return view('admin.requests.seller');
    });
    Route::get('/panel/customer_request', function () {
        return view('admin.requests.user');
    });
//    END REQUESTS

//    SHOW AND CREATE
    Route::get('/panel/show/users','UserController@show_on_admin_panel')->name('admin.show.users');
    Route::post('/panel/create/users','UserRegisterController@create_user_in_admin_panel')->name("admin.register.user");
    Route::get('/panel/create/users','UserRegisterController@show_create_user_in_admin_panel')->name('admin.create.users');
    Route::get('/panel/show/users/delete/{id}','UserController@destroy')->name('delete.user');



    Route::get('/panel/show/sellers','SellerController@show_on_admin_panel')->name('admin.show.sellers');
    Route::post('/panel/create/sellers','SellerRegisterController@create_seller_on_admin_panel')->name('admin.seller.register');
    Route::get('/panel/create/sellers','SellerRegisterController@show_create_seller_on_admin_panel')->name('admin.create.sellers');
    Route::get('/panel/show/sellers/delete/{id}','SellerController@destroy')->name('delete.seller');

//    END SHOW AND CREATE

//   COMMENTS
    Route::get('/panel/comments/sellers', function () {
        return view('admin.comments.seller');
    });
    Route::get('/panel/comments/users', function () {
        return view('admin.comments.user');
    });
//    END COMMENTS
    //   CATEGORIES
    Route::get('/panel/categories/show','CategoriesController@show')->name('show-categories');
    Route::get('/panel/categories/add','CategoriesController@show_add_form')->name('add-categories_form');
    Route::post('/panel/categories/add','CategoriesController@add')->name('add-categories');

//    END CATEGORIES

    Route::get('/panel/admin_profile', function () {
        return view('admin.partials.profile');
    });




});
//END ADMIN ROUTING

Route::get('/wewe', function () {
    return view('welcome');
});



Route::get('/','Front\MainPageController@show_products')->name('main');
Route::get('/shop','Front\ProductController@show_on_product_page')->name('shop');
Route::get('/shop/single/{id}','Front\ProductController@show_on_single_product_page')->name('shop.single');
Route::get('/cart','CartController@index')->name('cart');
Route::get('/cart/remove/{id}','CartController@delete')->name('cart.delete');
Route::post('/cart','CartController@store')->name('cart.store');






Route::prefix('seller')->namespace('Seller')->group(function () {
    Route::get('/panel', 'HomeController@index')->name('seller.home');

    Route::get('/register', 'RegisterController@index')->name('signup_seller_show');
    Route::post('/register', 'RegisterController@seller_register')->name('signup_seller');
    Route::get('/login', 'LoginController@showLoginForm')->name('signin_seller_show');
    Route::post('/login', 'LoginController@login')->name('signin_seller');


    Route::get('/panel/products', 'ProductController@index')->name('seller.product');
    Route::post('panel/products', 'ProductController@ProductUpload')->name('image.upload.post');
    Route::get('panel/products/delete/{id}', 'ProductController@destroy')->name('delete.product');
    // Route::post('panel/products', 'ProductController@ProductUpload');



    Route::get('/panel/orders', 'OrderController@index')->name('seller.order');
    Route::get('/panel/withdraw', 'WithdrawController@index')->name('seller.withdraw');
    Route::get('/panel/report', 'ReportController@index')->name('seller.report');
});

Route::get('/aaa', function () {
    return view('sellerDashboard.orders.index');
});

Route::get('/aaaa', function () {
    return view('sellerDashboard.withdraw.request');
});
Route::get('/aaaaa', function () {
    return view('sellerDashboard.withdraw.confirmed');
});
Route::get('/aaaaaa', function () {
    return view('sellerDashboard.withdraw.declined');
});
Route::get('/form', function () {
    return view('sellerDashboard.partials.report');
});

//Route::get('/log', function () {
//    return view('front.partials.login');
//});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
