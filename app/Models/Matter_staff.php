<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter_staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id', 'matter_id', 'punchin', 'punchout',
    ];

    protected $table = 'matter_staff';

}
