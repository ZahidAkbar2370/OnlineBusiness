<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = "invoices";

    protected $fillable = [
        "invoice_no",
        "total_items",
        "grand_total",
        "payment_type",
        "payment_status",
    ];
}
