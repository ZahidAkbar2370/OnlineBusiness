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
    return view('Shop.Home.home1');
});

Route::get('product1', function () {
    return view('Shop.Product.product1');
});


// 
// Template 2
// 
Route::get('/home2', function () {
    return view('Shop.Home.home2');
});

Route::get('product2', function () {
    return view('Shop.Product.product2');
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
Route::get('/home4', function () {
    return view('Shop.Template.default');
});

////////////////////////////////////// End Shop Template Route /////////////////////////////////////

Route::get("home",[TemplateController::class,"home"]);
Route::get("product",[TemplateController::class,"product"]);