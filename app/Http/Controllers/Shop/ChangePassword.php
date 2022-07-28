<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePassword extends Controller
{
    public function changePassword(Request $request)
    {
        $user_id = Auth::user()->id ?? "1";

        $users = User::where("id", $user_id)->first();

        if(Hash::check($request->old_password, $users->password)){
            $users->password = Hash::make($request->new_password);
            $users->update();

            Session::flash("success", "Your Password Update Successfully");
            return redirect()->back();
        }
        else{
            Session::flash("success", "Your old Password Mismatch");
            return redirect()->back();
        }
    }
}
