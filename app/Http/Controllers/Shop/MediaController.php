<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "0";

        $allMedias = Media::where('user_id', $user_id)->orderBy("id", "DESC")->paginate(20);

        return view('Shop.BackendPanel.Media.view_medias',["allMedias" => $allMedias]);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? "0";

        if($request->file('image'))
        {
            $imageName = rand() . time(). '.' . $request->image->extension();
            $request->image->move(public_path("images"), $imageName);

            $createMedia = Media::create([
                "user_id" => $user_id,
                "image_url" => "images/". $imageName,
            ]);
        }

        return redirect()->back();
    }
}
