<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
   	use SoftDeletes;

	protected $table = 'banks';

	protected $fillable = ['name'];

	public function accounts(){
    	return $this->hasMany('App\Models\Account', 'bank_id');	
    }
}
