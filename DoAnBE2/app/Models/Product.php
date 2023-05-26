<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    //Start func 10 v.0
    public static function getPaginationProductsByCategoryID($category_id, $pagination)
    {
        $result = self::where('category_id', $category_id)->paginate($pagination);

        return $result;
    }
    //End func 10 v.0
}
