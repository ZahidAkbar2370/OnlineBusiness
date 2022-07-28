<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabelPassword extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";
        $all_labels = Label::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.Label.view_label",["all_labels" => $all_labels]);
    }

    public function create()
    {
        return view("Shop.BackendPanel.Label.add_label");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? "1";

        $insertLabel = Label::create([
            "user_id" => $user_id,
            "p_category_name" => $request->category_name,
        ]);

        Session::flash("success","ProductCategory Created Successfully");
        return redirect()->back();
    }

    public function activeCategory($id)
    {
        $activeProductCategory = ProductCategory::find($id);

        $activeProductCategory->publication_status = "1";

        $activeProductCategory->update();

        Session::flash("success","ProductCategory Status Active Successfully");
        return redirect()->back();
    }

    public function inactiveCategory($id)
    {
        $inactiveProductCategory = ProductCategory::find($id);

        $inactiveProductCategory->publication_status = "0";

        $inactiveProductCategory->update();

        Session::flash("success","ProductCategory Status Inactive Successfully");
        return redirect()->back();
    }

    public function deleteCategory($id)
    {
        $deleteProductCategory = ProductCategory::find($id);
        $deleteProductCategory->delete();

        Session::flash("success","ProductCategory Delete Successfully");
        return redirect()->back();
    }
}
