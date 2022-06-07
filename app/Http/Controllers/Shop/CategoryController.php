<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";
        $all_categories = ProductCategory::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.Category.view_categories",["all_categories" => $all_categories]);
    }
}
