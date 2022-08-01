<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? "1";

        $orders = Order::where("shop_id", $user_id)->where('status', "pending")
                    ->with("customers")
                    ->with("users")
                    ->with("shops")
                    ->with("products")
                    ->get();
        
        // echo "<pre>";
        // print_r($orders);
        // echo "</pre>";
        // exit;

        return view("Shop.BackendPanel.Order.view_orders", ["orders" => $orders]);
    }

    public function orderHistory()
    {
        $user_id = Auth::user()->id ?? "1";

        $orders = Order::where("shop_id", $user_id)->whereNot("status", "pending")
                    ->with("customers")
                    ->with("users")
                    ->with("shops")
                    ->with("products")
                    ->get();
        
        // echo "<pre>";
        // print_r($orders);
        // echo "</pre>";
        // exit;

        return view("Shop.BackendPanel.Order.view_orders_history", ["orders" => $orders]);
    }

    public function accepted($order_id)
    {
        $acceptOrder = Order::where("id", $order_id)->first();

        $acceptOrder->status = "accepted";
        $acceptOrder->update();

        return redirect()->back();
    }

    public function delivered($order_id)
    {
        $acceptOrder = Order::where("id", $order_id)->first();

        $acceptOrder->status = "delivered";
        $acceptOrder->update();

        return redirect()->back();
    }

    public function done($order_id)
    {
        $acceptOrder = Order::where("id", $order_id)->first();

        $acceptOrder->status = "done";
        $acceptOrder->update();

        return redirect()->back();
    }
}
