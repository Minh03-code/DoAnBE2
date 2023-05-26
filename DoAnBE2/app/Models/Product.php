<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    

    public static function getAllProductsLikedByAccountID($account_id)
    {
        $mangIdSPYeuThich = ProductLike::where('account_id',$account_id)->get();
        $mangSPYeuThich=[];
        foreach ($mangIdSPYeuThich as $item) {
            array_push($mangSPYeuThich,self::find($item->product_id));
        }
        return $mangSPYeuThich;
    }
}
