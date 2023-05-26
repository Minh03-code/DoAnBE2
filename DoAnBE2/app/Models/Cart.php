<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';

    //Start function 12
    public static function getItemsInCartTableByAccountID($account_id)
    {
        $result = self::where('account_id', '=', $account_id)->get();
        return $result;
    }
    //End function 12
}
