<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionTypes extends Model
{
 	 protected $table = 'transactiontypes';
     protected $fillable = array('name','id');
     public $incrementing=false;
     public $timestamps = false;
}
