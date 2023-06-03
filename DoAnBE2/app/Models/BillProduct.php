<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillProduct extends Model
{
    use HasFactory;
    protected $table = 'bill_products';

    protected $fillable = [
        'bill_id',
        'product_id',
        'product_name',
        'product_price',
        'product_image',
        'quantity'
    ];
}
