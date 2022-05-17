<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use App\Models\ShopProfile;

class ShopController extends Controller
{
    public function shops()
    {
        $all_shops = ShopProfile::orderBy("id", "DESC")
                        ->where("publication_status", "1")
                        ->with("ShopCategory")
                        ->get();

        return view("App.Pages.shops",["all_shops" => $all_shops]);
    }

    public function shopHome($shop_url)
    {
        $shopProfile = ShopProfile::where("shop_url", $shop_url)
                        ->where("publication_status", "1")
                        ->get();
        $products = Product::where('user_id', $shopProfile[0]->user_id)
                        ->where("publication_status", "1")
                        ->orderBy("id", "DESC")
                        ->with("ProductCategory")
                        ->paginate(8);

        return view("Shop.Home.home",[
            "shopProfile" => $shopProfile[0],
            "products" => $products,
        ]);
    }

    public function shopCategories()
    {
        $shopCategories = ShopCategory::where("publication_status", "1")->get();

        return view("App.Pages.categories",["shopCategories" => $shopCategories]);
    }
}
