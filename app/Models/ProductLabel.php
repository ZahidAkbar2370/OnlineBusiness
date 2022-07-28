<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLabel extends Model
{
    use HasFactory;

    protected $table = "product_labels";

    protected $fillable = [
        "user_id",
        "label_title",
        "optional",
        "publication_status",
    ];
}
