<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        "invoice_no",
        "customer_id",
        "shop_id",
        "product_id",
        "product_sale_price",
        "product_discount_price",
        "total_price",
        "status",
        "quantity",
    ];

    public function products()
    {
        return $this->belongsTo("App\Models\product", "product_id", "id");
    }

    public function customers()
    {
        return $this->belongsTo("App\Models\Customer", "customer_id", "id");
    }

    public function shops()
    {
        return $this->belongsTo("App\Models\ShopProfile", "shop_id", "user_id");
    }

    public function users()
    {
        return $this->belongsTo("App\Models\User", "customer_id", "id");
    }
}
