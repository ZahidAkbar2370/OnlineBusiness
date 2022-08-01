<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProfile extends Model
{
    use HasFactory;

    protected $table = "shop_profiles";

    protected $fillable = [
        "user_id",
        "template_id",
        "shop_category_id",
        "package_id",
        "shop_url",
        "shop_name",
        "shop_mobile_no",
        "shop_address",
        "shop_about",
        "profile_image",
        "cover_photo",
        "publication_status",
    ];

    public function ShopCategory()
    {
        return $this->belongsTo("App\Models\ShopCategory","shop_category_id","id");
    }

    public function template()
    {
        return $this->belongsTo("App\Models\Template","template_id","id");
    }

    // public function package()
    // {
    //     return $this->belongsTo("App\Models\Package","template_id","id");
    // }
}
