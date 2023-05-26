<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model
{
    use HasFactory;
    protected $table = 'product_likes';
    //Start 5
    public static function countLikeByProductID($productID)
    {
        return count(self::where('product_id',$productID)->get());
    }
    //End 5
}
