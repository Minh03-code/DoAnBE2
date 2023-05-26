<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    //Start function 9
    public static function getPaginationProducts($numberOfPage)
    {
        return self::paginate($numberOfPage);
    }
    //End function 9
}
