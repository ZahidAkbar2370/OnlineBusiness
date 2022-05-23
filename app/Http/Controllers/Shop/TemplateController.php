<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopProfile;
use App\Models\Template;
use App\Models\TemplateSettings;
use Database\Seeders\TemplateSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";

        $templates = Template::where("publication_status", "1")->get();
        $shopProfile = ShopProfile::where("user_id",$user_id)->first();

        return view('Shop.BackendPanel.TemplateSetting.view_templates',
            [
                "templates" => $templates,
                "shopProfile" => $shopProfile,
            ]
        );
    }

    public function active($template_id)
    {
        $user_id = Auth::user()->id ?? "1";

        $findShopTemplate = ShopProfile::where("user_id", $user_id)->first();

        $findShopTemplate->template_id = $template_id;
        $findShopTemplate->update();

        return redirect()->back();
    }
}
