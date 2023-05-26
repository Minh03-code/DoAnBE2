<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    //Start func 8 v1.0
    public static function getAllDataInContactTable()
    {
        $contact = Contact::first();
        return $contact;
    }
     //End func 8 v1.0
}
