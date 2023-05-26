<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model
{
    use HasFactory;
    protected $table = 'product_likes';

    public static function countProductsLikedByAccountID($id_account){
        return count(self::where('account_id',$id_account)->get());
    }
}
