<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $table = "templates";

    protected $fillable = [
        "user_id",
        'template_name',
        "publication_status",
    ];
}
