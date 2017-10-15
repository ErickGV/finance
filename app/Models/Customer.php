<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes;

	protected $table = 'customers';
	
    public function docType(){
        return $this->belongsTo('App\Models\DocType', 'docType_id');
    }

    public function gender(){
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }

    public function accounts(){
    	return $this->hasMany('App\Models\Account', 'customer_id');	
    }

    public function user(){
    	return $this->hasOne('App\User', 'customer_id');	
    }
}
