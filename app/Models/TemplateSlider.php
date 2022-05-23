<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSlider extends Model
{
    use HasFactory;

    protected $table = "template_sliders";

    protected $fillable = [
        "user_id",
        "template_id",
        "slider_image_url",
        "slider_text",
        "slider_sub_text",
        "slider_button_url",
    ];
}
