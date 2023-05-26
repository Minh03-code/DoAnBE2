<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public static function getProductsBySearchKeyword($keyword){
        $result = self::where('name', 'like', '%'.$keyword.'%' )->get();

        return $result;
    }
}
