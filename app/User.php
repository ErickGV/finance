<?php

namespace App;

use App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customer(){
        return $this->belongsTo('App\User', 'customer_id'); 
    }

    public function roledetails(){
        return $this->hasMany('App\Models\Roledetail', 'role_id');  
    }
}
