<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    //Start func 11 v1.0
    public static function getProductByID($id)
    {
        $sanpham = Product::find($id);
        return $sanpham;
    }
    //End func 11 v1.0
}
