<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roledetail extends Model
{
    use SoftDeletes;

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');	
    }

    public function role(){
    	return $this->belongsTo('App\Models\Role', 'role_id');	
    }

}
