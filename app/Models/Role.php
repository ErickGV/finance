<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public function roledetails(){
    	return $this->hasMany('App\Models\Roledetail', 'role_id');	
    }

}
