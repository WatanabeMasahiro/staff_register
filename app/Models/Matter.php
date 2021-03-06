<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    use HasFactory;


    // public function matters()
    // {
    //     return $this->belongsToMany('App\Models\Matter')
    //                 ->withPivot('punchin', 'punchout')
    //                 ->withTimestamps();
    // }

    // public function staff()
    // {
    //     return $this->belongsToMany('App\Models\Staff')->withTimestamps();
    // }

    protected $dates = [
        'day',
        'start_time',
        'ending_time',
    ];

    protected $table = 'matters';

}
