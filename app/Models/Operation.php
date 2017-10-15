<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operation extends Model
{
    use SoftDeletes;

	public function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function sourceAccount(){
    	return $this->belongsTo('App\Models\Account', 'sourceAccount_id');	
    }

    public function targetAccount(){
    	return $this->belongsTo('App\Models\Account', 'targetAccount_id');	
    }

    public function targetCreditCard(){
    	return $this->belongsTo('App\Models\CreditCard', 'targetCreditCard_id');	
    }

    public function sendCurrency(){
        return $this->belongsTo('App\Models\Currency', 'sendCurrency_id');
    }

    public function receivedCurrency(){
        return $this->belongsTo('App\Models\Currency', 'receivedCurrency_id');
    }
}
