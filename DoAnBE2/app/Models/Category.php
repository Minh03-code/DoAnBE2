<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public static function getPaginationCategories($pagination){
        $result = self::paginate($pagination);

        return $result;
    }
    public static function getAllCategory(){
        $category = self::all();

        return $category;
    }
}
