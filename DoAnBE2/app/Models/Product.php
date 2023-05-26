<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    //Start 3
    public static function getProductsByCategoryNumberLimit($gioiHan)
    {
        return self::offset(0)->limit($gioiHan)->get();
    }
    //End 3

    //Start func 10 v.0
    public static function getPaginationProductsByCategoryID($category_id, $pagination)
    {
        $result = self::where('category_id', $category_id)->paginate($pagination);

        return $result;
    }
    //End func 10 v.0

}

    

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
 
