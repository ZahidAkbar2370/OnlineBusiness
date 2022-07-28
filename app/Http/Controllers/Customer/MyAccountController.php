<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function customerProfile()
    {
        
        $customer = Customer::where('user_id', Auth::user()->id ?? "1")
                            ->first();

        return view("App.Pages.my_account",[
            "customer" => $customer,
        ]);
    }
}
