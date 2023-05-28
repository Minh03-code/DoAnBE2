<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';

    public static function getProfileByAccountID($accounnt_id){
        $result = self::where('account_id', $accounnt_id)->first();

        return $result;
    }
}
