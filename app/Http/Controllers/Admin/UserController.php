<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function active($id)
    {
        $activeUser = User::find($id);

        $activeUser->publication_status = "1";
        $activeUser->update();

        Session::flash("success", "Shop Active Successfully!");
        return redirect()->back();
    }

    public function deactive($id)
    {
        $activeUser = User::find($id);

        $activeUser->publication_status = "0";
        $activeUser->update();

        Session::flash("success", "Shop De-Active Successfully!");
        return redirect()->back();
    }
}
