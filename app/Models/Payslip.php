<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $dates = [
        'start_period',
        'end_period',
        'payment_date',
    ];

    protected $table = 'payslips';

}
