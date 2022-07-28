<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShopProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart($shop_url)
    {
        $getSession = session()->get("cart");

        // echo "<pre>";
        // print_r($getSession);
        // echo "</pre>";
        // exit;
        $user_id = Auth::user()->id ?? "1";

        $shopProfile = ShopProfile::where("shop_url", $shop_url)
                        ->where("publication_status", "1")
                        ->get();
        // $products = Product::where('user_id', $shopProfile[0]->user_id)
        //                 ->where("publication_status", "1")
        //                 ->orderBy("id", "DESC")
        //                 ->with("ProductCategory")
        //                 ->paginate(8);

        return view("Shop.Pages.carts",[
            "shopProfile" => $shopProfile[0],
            "getSession" => $getSession,
        ]);
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_id" => $product->id,
                "shop_id" => $product->user_id,
                "brand_id" => $product->brand_id,
                "product_name" => $product->product_name,
                "quantity" => 1,
                "product_sale_price" => $product->product_sale_price,
                "product_discount_price" => $product->product_discount_price,
                "image" => $product->product_image_1
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart($key)
    {
        if($key){
            $cart = session()->get('cart');
            $cart[$key]["quantity"] = $cart[$key]["quantity"] + 1;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
            return redirect()->back();
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart($key)
    {
        if($key) {
            $cart = session()->get('cart');
            if(isset($cart[$key])) {
                unset($cart[$key]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->back();
        }
    }

    public function checkout()
    {
        $customer_id = Auth::user()->id ?? "1";
        $invoice_no = time() + rand(1000,1000000000) + time() + rand(1,10000);

        $getSession = session()->get('cart');

        $deliveryCharges = 0;
        $totalDiscountPrice = 0;
        $totalItems = 0;
        $totalSalePrice = 0;

        if(!empty($getSession)){
            foreach($getSession as $key => $sessionValue){
                $totalItems = $totalItems+1;

                $totalDiscountPrice += $sessionValue['product_discount_price']  * $sessionValue['quantity']; 
                $totalSalePrice += $sessionValue['product_sale_price']  * $sessionValue['quantity'];
                
                $insertOrder = Order::create([
                    "invoice_no" => $invoice_no,
                    "customer_id" => $customer_id,
                    "shop_id" => $sessionValue['shop_id'],
                    "product_id" => $sessionValue['product_id'],
                    "product_sale_price" => $sessionValue['product_sale_price'],
                    "product_discount_price" => $sessionValue['product_discount_price'],
                    "total_price" => $sessionValue['product_sale_price'] - $sessionValue['product_discount_price'],
                ]);
            }

            $insertVoice = Invoice::create([
                "invoice_no" => $invoice_no,
                "total_items" => $totalItems,
                "grand_total" => ($totalSalePrice - $totalDiscountPrice) + $deliveryCharges,
            ]);
        }

        session()->forget('cart');

        session()->flash("success", "Order Sent To Shops!");
        return redirect()->back();
    }
}
