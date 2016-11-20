<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionCategories extends Model
{
	 protected $table = 'transactioncategories';	
	 protected $fillable = array('name');
     public $incrementing=false;
     public $timestamps = false;
     
}
