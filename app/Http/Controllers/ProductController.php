<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ShopProfile;

class ProductController extends Controller
{
    public function productDetail($product_id)
    {
        $product = Product::where("id", $product_id)->with("ProductCategory")->with("brand")->first();
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit;
        return view('App.pages.product_detail_page', ["product" => $product]);
    }
    // public function products($shop_url)
    // {
    //     $all_shops = ShopProfile::where("publication_status", "1")->orderBy("id", "DESC")->with("ShopCategory")->get();
    //     $products = Product::where("publication_status", "1")->orderBy("id", "DESC")->with("ProductCategory")->paginate(10);

    //     return view("App.Pages.shops",["all_shops" => $all_shops]);
    // }

    public function shopProducts($shop_url)
    {
        $shopProfile = ShopProfile::where("shop_url", $shop_url)->get();
        $products = Product::where('user_id', $shopProfile[0]->user_id)
                            ->where("publication_status", "1")
                            ->orderBy("id", "DESC")
                            ->with("ProductCategory")
                            ->get();

        return view("Shop.Product.product",[
            "shopProfile" => $shopProfile[0],
            "products" => $products,
        ]);
    }
}
