<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    use HasFactory;


    public function staff()
    {
        return $this->belongsToMany('App\Models\Staff');
    }


}