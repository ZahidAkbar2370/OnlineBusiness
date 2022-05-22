<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";
        $all_brands = Brand::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.Brand.view_brands",["all_brands" => $all_brands]);
    }
}
