<?php

use App\Http\Controllers\TemplateController;
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
    return view('App.layout');
});

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

Route::get('product2', function () {
    return view('Shop.Product.product2');
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

Route::get("home",[TemplateController::class,"home"]);
Route::get("products",[TemplateController::class,"product"]);