<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountType extends Model
{
    use SoftDeletes;

	protected $table = 'account_types';

    protected $fillable = ['name'];

    public function accounts(){
    	return $this->hasMany('App\Models\Account', 'accountType_id');	
    }
}
