<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';

    // start 15
    public static function getPaginationBills($pagination){
        $result = self::paginate($pagination);

        return $result;
    }
    // end 15
}
