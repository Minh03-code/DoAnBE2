<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    //Start 3
    public static function getProductsByCategoryNumberLimit($gioiHan,$categoryId)
    {
        return self::where('category_id',$categoryId)->offset(0)->limit($gioiHan)->get();
    }
    //End 3
}