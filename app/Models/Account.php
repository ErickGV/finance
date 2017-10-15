<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

	protected $table = 'accounts';

	public function bank(){
        return $this->belongsTo('App\Models\Bank', 'bank_id');
    }

    public function accountType(){
        return $this->belongsTo('App\Models\AccountType', 'accountType_id');
    }

    public function currency(){
        return $this->belongsTo('App\Models\Currency', 'currency_id');
    }

	public function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function sourceOperations(){
    	return $this->hasMany('App\Models\Operation', 'sourceAccount_id');	
    }

    public function targetOperations(){
    	return $this->hasMany('App\Models\Operation', 'targetAccount_id');	
    }
}
