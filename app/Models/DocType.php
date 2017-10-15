<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocType extends Model
{
    use SoftDeletes;

    protected $table = 'doc_types';

    protected $fillable = ['name'];

    public function customers(){
    	return $this->hasMany('App\Models\Customer', 'docType_id');	
    }

}
