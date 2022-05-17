<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;



////////////////////////////////////// Start Shop Template Route /////////////////////////////////////
// 
// Template 1
// 
Route::get('/home1', function () {
    return view('Shop.Template.template1');
});


// 
// Template 2
// 
Route::get('/home2', function () {
    return view('Shop.Template.template2');
});

// 
// Template 3
// 
Route::get('/home3', function () {
    return view('Shop.Template.template3');
});

// 
// Template 4 (default)
// 
Route::get('/default', function () {
    return view('Shop.Template.default');
});


Route::get('/my-account', function () {
    return view('Shop.Pages.my_account');
});

Route::get('/carts', function () {
    return view('Shop.Pages.carts');
});

Route::get('/shop-layout', function () {
    return view('Shop.BackendPanel.layout');
});

Route::get('/shop-panel', function () {
    return view('Shop.BackendPanel.Dashboard.dashboard');
});

Route::get('/shop-add-user', function () {
    return view('Shop.BackendPanel.User.add_user');
});

Route::get('/shop-view-users', function () {
    return view('Shop.BackendPanel.User.view_users');
});

////////////////////////////////////// End Shop Template Route /////////////////////////////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


////////////////////////////// Test Routes End //////////////////////////////////

Route::get("/",[App\Http\Controllers\IndexController::class,"home"]);
Route::get("shops",[App\Http\Controllers\ShopController::class,"shops"]);
Route::get("categories",[App\Http\Controllers\ShopController::class,"shopCategories"]);
Route::get("shop/{shop_url}",[App\Http\Controllers\ShopController::class,"shopHome"]);
Route::get("products/{shop_url}",[App\Http\Controllers\ProductController::class,"shopProducts"]);


//////////////////////////////////// Shop Routes /////////////////////////////////////

Route::prefix('shop')->group(function () {
    
});

//////////////////////////////////// Customer Routes //////////////////////////////////

Route::prefix('customer')->group(function () {
    
});