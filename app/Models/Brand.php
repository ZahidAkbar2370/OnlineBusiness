<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brands";

    protected $fillable = [
        "user_id",
        "brand_name",
        "optional",
        "publication_status",
    ];
}
