<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        "user_id",
        "brand_id",
        "p_category_id",
        "lable_id",
        "product_barcode",
        "product_name",
        "product_sale_price",
        "product_discount_price",
        "product_short_description",
        "product_image_1",
        "product_image_2",
        "publication_status",
    ];

    public function ProductCategory()
    {
        return $this->belongsTo("App\Models\ProductCategory","p_category_id","id");
    }

    public function brand()
    {
        return $this->belongsTo("App\Models\Brand","brand_id","id");
    }
}


