<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transactions';
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 2 attributes able to be filled
   protected $fillable = array('date','transactiontypes_id', 'amount','description','categories_id');
}
