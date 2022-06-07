<?php

use App\Http\Controllers\TemplateController;
use App\Http\Middleware\ShopMiddleware;
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

// Route::get('/shop-layout', function () {
//     return view('Shop.BackendPanel.layout');
// });

// Route::get('/shop-panel', function () {
//     return view('Shop.BackendPanel.Dashboard.dashboard');
// });

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
////////////////////////////// App Routes //////////////////////////////////////

Route::get("/",[App\Http\Controllers\IndexController::class,"home"]);
Route::get("shops",[App\Http\Controllers\ShopController::class,"shops"]);
Route::get("shops/category/{id}",[App\Http\Controllers\ShopController::class,"shopCategoryWise"]);
Route::get("shop/{shop_url}",[App\Http\Controllers\ShopController::class,"shopHome"]);
Route::get("products/{shop_url}",[App\Http\Controllers\ProductController::class,"shopProducts"]);
Route::get("categories",[App\Http\Controllers\ShopController::class,"shopCategories"]);



//////////////////////////////////// Shop Routes /////////////////////////////////////

Route::get("shop-signup",[App\Http\Controllers\Shop\RegisterController::class,"signUp"]);
Route::post("shop-signup",[App\Http\Controllers\Shop\RegisterController::class,"register"]);

Route::get('/404', function () {
    return view('App.Pages.404');
});

Route::middleware([ShopMiddleware::class])->group(function () {
    Route::prefix('shop-')->group(function () {

        Route::get('/profile', function () {
            return view('Shop.BackendPanel.Profile.profile');
        });

        Route::get('/change-password', function () {
            return view('Shop.BackendPanel.ChangePassword.change_password');
        });

        Route::get("view-templates",[App\Http\Controllers\Shop\TemplateController::class,"index"]);
        Route::get("active-template/{template_id}",[App\Http\Controllers\Shop\TemplateController::class,"active"]);
        Route::get("dashboard",[App\Http\Controllers\Shop\DashboardController::class,"dashboard"]);
//
// Shop Brands
// 
        Route::get("add-brand",[App\Http\Controllers\Shop\BrandController::class,"create"]);
        Route::post("save-brand",[App\Http\Controllers\Shop\BrandController::class,"store"]);
        Route::get("view-brands",[App\Http\Controllers\Shop\BrandController::class,"index"]);
        Route::get("active-brand/{id}",[App\Http\Controllers\Shop\BrandController::class,"index"]);
        Route::get("inactive-brand/{id}",[App\Http\Controllers\Shop\BrandController::class,"index"]);
        Route::get("edit-brand/{id}",[App\Http\Controllers\Shop\BrandController::class,"index"]);
        Route::get("delete-brand/{id}",[App\Http\Controllers\Shop\BrandController::class,"index"]);
//
// Shop Categories
// 
        Route::get("create-category",[App\Http\Controllers\Shop\CategoryController::class,"create"]);
        Route::post("save-category",[App\Http\Controllers\Shop\CategoryController::class,"store"]);
        Route::get("view-categories",[App\Http\Controllers\Shop\CategoryController::class,"index"]);
        Route::get("active-category/{id}",[App\Http\Controllers\Shop\CategoryController::class,"activeCategory"]);
        Route::get("inactive-category/{id}",[App\Http\Controllers\Shop\CategoryController::class,"inactiveCategory"]);
        Route::get("edit-category/{id}",[App\Http\Controllers\Shop\CategoryController::class,"editCategory"]);
        Route::get("delete-category/{id}",[App\Http\Controllers\Shop\CategoryController::class,"deleteCategory"]);
//
// Shop Products
// 
        Route::get("create-product",[App\Http\Controllers\Shop\ProductController::class,"create"]);
        Route::post("save-product",[App\Http\Controllers\Shop\ProductController::class,"store"]);
        Route::get("view-products",[App\Http\Controllers\Shop\ProductController::class,"index"]);
        Route::get("active-product/{id}",[App\Http\Controllers\Shop\ProductController::class,"activeProduct"]);
        Route::get("inactive-product/{id}",[App\Http\Controllers\Shop\ProductController::class,"inactiveProduct"]);
        Route::get("edit-product/{id}",[App\Http\Controllers\Shop\ProductController::class,"editProduct"]);
        Route::get("delete-product/{id}",[App\Http\Controllers\Shop\ProductController::class,"deleteProduct"]);
    });
});

//////////////////////////////////// Customer Routes //////////////////////////////////

Route::prefix('customer')->group(function () {
    
});