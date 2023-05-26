<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    public static function getAllDataInContactTable()
    {
        $contact = Contact::first();
        return $contact;
    }
}
