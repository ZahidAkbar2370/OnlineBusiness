<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";
        $all_brands = Brand::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.Brand.view_brands",["all_brands" => $all_brands]);
    }

    public function create()
    {
        return view("Shop.BackendPanel.Brand.add_brand");
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        return view("Shop.BackendPanel.Brand.edit_brand", ["brand" => $brand]);
    }

    public function update(Request $request)
    {
        $updateBrand = Brand::find($request->id);

        $updateBrand->brand_name = $request->brand_name;
        $updateBrand->update();

        Session::flash("success", "Brand Updated Successfully");
        return redirect('shop-/view-brands');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? "1";

        $insertBrand = Brand::create([
            "user_id" => $user_id,
            "brand_name" => $request->brand_name,
        ]);

        Session::flash("success","Brand Created Successfully");
        return redirect()->back();
    }

    public function active($id)
    {
        $activeBrand = Brand::find($id);

        $activeBrand->publication_status = "1";

        $activeBrand->update();

        Session::flash("success","Brand Status Active Successfully");
        return redirect()->back();
    }

    public function inactive($id)
    {
        $inactiveBrand = Brand::find($id);

        $inactiveBrand->publication_status = "0";

        $inactiveBrand->update();

        Session::flash("success","Brand Status Inactive Successfully");
        return redirect()->back();
    }

    public function delete($id)
    {
        $deleteBrand = Brand::find($id);
        $deleteBrand->delete();

        Session::flash("success","Brand Delete Successfully");
        return redirect()->back();
    }
}
