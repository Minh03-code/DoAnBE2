<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'status',
        'category_id',
    ];

    

    //Start 3
    public static function getProductsByCategoryNumberLimit($gioiHan,$categoryId)
    {
        return self::where('category_id',$categoryId)->offset(0)->limit($gioiHan)->get();
    }
    //End 3

    //Start func 10 v.0
    public static function getPaginationProductsByCategoryID($category_id, $pagination)
    {
        $result = self::where('category_id', $category_id)->paginate($pagination);

        return $result;
    }
    //End func 10 v.0


    //Start func 11 v1.0
    public static function getProductByID($id)
    {
        $sanpham = Product::find($id);
        return $sanpham;
    }
    //End func 11 v1.0
 


    

    public static function getAllProductsLikedByAccountID($account_id)
    {
        $mangIdSPYeuThich = ProductLike::where('account_id',$account_id)->get();
        $mangSPYeuThich=[];
        foreach ($mangIdSPYeuThich as $item) {
            array_push($mangSPYeuThich,self::find($item->product_id));
        }
        return $mangSPYeuThich;
    }


    //Start function 9
    public static function getPaginationProducts($numberOfPage)
    {
        return self::paginate($numberOfPage);
    }
    //End function 9

    //Start function 1
    public static function getProductsBySearchKeyword($keyword){
        $result = self::where('name', 'like', '%'.$keyword.'%' )->get();

        return $result;
    }
    //End function 1
    
    //Start func 17
    public static function getProductByNumberLimit($gioiHan)
    {
        return self::offset(0)->limit($gioiHan)->get();
    }
    //End func 17

}
 
