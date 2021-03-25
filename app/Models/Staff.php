<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tel', 'address', 'age', 'birthday', 'gender', 'remarks', 'photoId',
    ];

    protected $dates = ['birthday'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function matters()
    {
        return $this->belongsToMany('App\Models\Matter')
                    ->withPivot('punchin', 'punchout')
                    ->withTimestamps();
    }

    // public function matter_staff()
    // {
    //     return $this->belongsToMany('App\Models\Matter')
    //                 ->using('App\Models\Matter_staff')
    //                 ->withPivot();
    // }

    public function payslips()
    {
        return $this->hasmany('App\Models\Payslip');
    }

    // public function contacts()
    // {
    //     return $this->hasmany('App\Models\Contact');
    // }

    // public function panchins()
    // {
    //     return $this->hasmany('App\Models\Matter_staff');
    // }


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'staff';

}
