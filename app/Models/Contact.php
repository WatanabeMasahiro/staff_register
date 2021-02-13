<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = [
        'staff_id', 'title', 'text',
    ];

    public static $rules = array (
        'title' => 'required',
        'text' => 'max:10000',
    );
}
