<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateTrend extends Model
{
    use HasFactory;

    protected $table = "template_trends";

    protected $fillable = [
        "user_id",
        "template_id",
        "text",
        "video_url",
        "bg_image",
        "button_url",
    ];
}
