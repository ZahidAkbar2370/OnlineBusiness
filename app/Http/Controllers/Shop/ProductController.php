<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";
        $all_products = Product::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.Product.view_products",["all_products" => $all_products]);
    }
}
