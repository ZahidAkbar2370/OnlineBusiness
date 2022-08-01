<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view("Shop.BackendPanel.User.add_user");
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? "1";

        $insertUser = User::create([
            "user_id" => $user_id,
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "shop_user",
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $user_id = Auth::user()->id ?? "";

        $users = User::where("user_id", $user_id)->get();

        return view("Shop.BackendPanel.User.view_users", ["users" => $users]);
    }

    public function inactive($id)
    {
        $inactiveUser = User::find($id);

        $inactiveUser->publication_status = "0";
        $inactiveUser->update();

        return redirect()->back();
    }

    public function active($id)
    {
        $activeUser = User::find($id);

        $activeUser->publication_status = "1";
        $activeUser->update();

        return redirect()->back();
    }
}
