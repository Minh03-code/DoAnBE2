<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = [
        'username',
        'password',
        'status'
    ];

    //Start function 16
    public function getProfileAccount()
    {
        return $this->setAttribute('profileAccount', $this->hasOne(Profile::class, 'account_id', 'id')->first());
    }
    
    public static function getPaginationAccount($numberOfPage)
    {
        $result = self::paginate($numberOfPage);
        if ($result) {
            foreach ($result as $item){
                $item->getProfileAccount();
            }
        }
        return $result;
    }
    //End function 16
}
