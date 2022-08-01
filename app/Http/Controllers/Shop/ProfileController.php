<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::user()->id ?? "1";

        $shopProfile = ShopProfile::with("template")->where("user_id", $user_id)->first();

        return view('Shop.BackendPanel.Profile.profile', ["shopProfile" => $shopProfile]);
    }
}
