<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use App\Models\ShopProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RegisterController extends Controller
{
    public function signUp()
    {
        $categories = ShopCategory::all();
        return view("App.Pages.shop_sign_up",["categories" => $categories]);
    }

    public function register(Request $request)
    {
        $createUser = User::create([
            "name" => $request->owner_name,
            "email" => $request->shop_email,
            "password" => Hash::make($request->shop_password),
            "role" => "shop_owner",
            "publication_status" => "0",
        ]);

        $createShop = ShopProfile::create([
            "user_id" => $createUser->id,
            "shop_category_id" => $request->shop_category_id,
            "shop_url" => $request->shop_url."-".rand(1,300),
            "shop_name" => $request->shop_name,
            "shop_mobile_no" => $request->shop_mobile_no,
            "shop_address" => $request->shop_address,
            "shop_about" => $request->shop_about,
            "profile_image" => "https://via.placeholder.com/640x480.png/0022dd?text=".$request->shop_name,
            "publication_status" => "0",
        ]);

        session()->flash('success','Your Shop Registered Successfuly');
        return redirect('shop-signup');
    }
}
