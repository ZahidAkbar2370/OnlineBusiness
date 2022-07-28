<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use App\Models\ShopProfile;

class IndexController extends Controller
{
    public function home()
    {
        $shops = ShopProfile::where("publication_status", "1")->orderBy("id", "DESC")->with("ShopCategory")->paginate(7);
        $shop_categories = ShopCategory::where("publication_status", "1")->inRandomOrder()->paginate(6);
        $products = Product::where("publication_status", "1")->inRandomOrder()->with("ProductCategory")->paginate(10);

        return view('App.Pages.home',
            [
                "shops" => $shops,
                "shop_categories" => $shop_categories,
                "products" => $products,
            ]
        );
    }

    public function products()
    {
        $shops = ShopProfile::where("publication_status", "1")->orderBy("id", "DESC")->with("ShopCategory")->paginate(7);
        // $shop_categories = ShopCategory::where("publication_status", "1")->inRandomOrder()->paginate(6);
        $products = Product::where("publication_status", "1")->inRandomOrder()->with("ProductCategory")->paginate(50);

        return view('App.Pages.products',
            [
                "shops" => $shops,
                // "shop_categories" => $shop_categories,
                "products" => $products,
            ]
        );
    }
}
