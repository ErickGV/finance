<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

	protected $table = 'currencies';

    protected $fillable = ['name'];

	public function accounts(){
    	return $this->hasMany('App\Models\Account', 'currency_id');	
    }

    public function creditCards(){
    	return $this->hasMany('App\Models\CreditCard', 'currency_id');	
    }

    public function sourceOperations(){
    	return $this->hasMany('App\Models\Operation', 'sendCurrency_id');	
    }

    public function targetOperations(){
    	return $this->hasMany('App\Models\Operation', 'receivedCurrency_id');	
    }
}
