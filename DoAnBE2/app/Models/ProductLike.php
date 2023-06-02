<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model
{
    use HasFactory;
    protected $table = 'product_likes';

    protected $fillable =[
        'product_id',
        'account_id'
    ];
    //Start 5
    public static function countLikeByProductID($productID)
    {
        return count(self::where('product_id',$productID)->get());
    }
    //End 5

    //start 4
    public static function countProductsLikedByAccountID($id_account){
        return count(self::where('account_id',$id_account)->get());
    }
    //end 4
}
