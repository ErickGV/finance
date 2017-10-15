<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use SoftDeletes;

	public function customers(){
    	return $this->hasMany('App\Models\Customer', 'gender_id');	
    }
}
