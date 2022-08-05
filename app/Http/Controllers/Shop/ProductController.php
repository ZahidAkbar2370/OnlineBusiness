<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";

        $all_products = Product::where("user_id", $user_id)
                        ->with('ProductCategory')
                        ->with('brand')
                        ->get();

        return view("Shop.BackendPanel.Product.view_products",["all_products" => $all_products]);
    }

    public function create()
    {
        return view("Shop.BackendPanel.Product.add_product");
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view("Shop.BackendPanel.Product.edit_product", ["product" => $product]);
    }

    public function update(Request $request)
    {
        $updateProduct = Product::find($request->id);

        $updateProduct->brand_name = $request->brand_name;
        $updateProduct->update();

        $user_id = Auth::user()->id ?? "1";

        $thumbnail = 'images/15.jpg';

        $insertBrand = Product::create([
            "user_id" => $user_id,
            "label_id" => $request->label_id,
            "product_name" => $request->product_name,
            "p_category_id" => $request->p_categorey_name,
            "brand_id" => $request->brand_name,
            "product_sale_price" => $request->sale_price,
            "product_discount_price" => $request->discount_price,
            "product_short_description" => $request->short_description,
            "product_image_1" => $thumbnail,
            "product_image_2" => $thumbnail,
        ]);

        Session::flash("success","Product Created Successfully");
        return redirect()->back();

        Session::flash("success", "Brand Updated Successfully");
        return redirect('shop-/view-brands');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? "1";

        $thumbnail = 'images/15.jpg';

        $insertBrand = Product::create([
            "user_id" => $user_id,
            "label_id" => $request->label_id,
            "product_name" => $request->product_name,
            "p_category_id" => $request->p_categorey_name,
            "brand_id" => $request->brand_name,
            "product_sale_price" => $request->sale_price,
            "product_discount_price" => $request->discount_price,
            "product_short_description" => $request->short_description,
            "product_image_1" => $thumbnail,
            "product_image_2" => $thumbnail,
        ]);

        Session::flash("success","Product Created Successfully");
        return redirect()->back();
    }

    public function activeProduct($id)
    {
        $activeProduct = Product::find($id);

        $activeProduct->publication_status = "1";

        $activeProduct->update();

        Session::flash("success","Product Status Active Successfully");
        return redirect()->back();
    }

    public function inactiveProduct($id)
    {
        $activeProduct = Product::find($id);

        $activeProduct->publication_status = "0";

        $activeProduct->update();

        Session::flash("success","Product Status De-Active Successfully");
        return redirect()->back();
    }

    public function deleteProduct($id)
    {
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();

        Session::flash("success","Product Delete Successfully");
        return redirect()->back();
    }
}
