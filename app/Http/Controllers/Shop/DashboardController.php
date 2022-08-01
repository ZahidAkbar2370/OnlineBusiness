<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ShopProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $shop_id = Auth::user()->id ?? "1";

        $websiteURL = ShopProfile::where("user_id", $shop_id)->first();

        $pendingOrders = Order::where("shop_id", $shop_id)->where("status", "pending")->count();
        $activeOrders = Order::where("shop_id", $shop_id)->whereNot("status", "pending")->count();
        $doneOrders = Order::where("shop_id", $shop_id)->where("status", "done")->count();
        $totalOrders = Order::where("shop_id", $shop_id)->count();
        
        $orders = Order::where("shop_id", $shop_id)->with("customers")->with("products")->get();
        $allBrands = Brand::where("user_id", $shop_id)->paginate(10);
        $allCategories = ProductCategory::where("user_id", $shop_id)->paginate(10);
        $allProducts = Product::where("user_id", $shop_id)->paginate(10);

        $products = Product::where("user_id", $shop_id)->count();
        $brands = Brand::where("user_id", $shop_id)->count();
        $productCategories = ProductCategory::where("user_id", $shop_id)->count();
        // $labels = App\Models\Label::where("user_id", $shop_id)->count();

        return view('Shop.BackendPanel.Dashboard.dashboard',[
            "pendingOrders" => $pendingOrders,
            "activeOrders" => $activeOrders,
            "doneOrders" => $doneOrders,
            "totalOrders" => $totalOrders,
            "products" => $products,
            "brands" => $brands,
            "productCategories" => $productCategories,
            "orders" => $orders,
            "allBrands" => $allBrands,
            "allCategories" => $allCategories,
            "allProducts" => $allProducts,
            "websiteURL" => $websiteURL,
        ]);
    }
}
