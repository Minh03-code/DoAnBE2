<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = ['status'];

    public function getProductsOfBill(){
        $this->setAttribute("products_of_bill", $this->hasMany(BillProduct::class, "bill_id", "id")->get());
    }

    public static function getPaginationBillsByAccountID($account_id, $pagination) {
        $result = self::where('account_id', $account_id)->paginate($pagination);
        if ($result){
            foreach ($result as $item) {
                $item->getProductsOfBill();
            }
        }
        return $result;
    }

    // start 15
    public static function getPaginationBills($pagination){
        $result = self::paginate($pagination);

        return $result;
    }
    // end 15
}
