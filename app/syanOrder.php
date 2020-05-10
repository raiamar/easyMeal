<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class syanOrder extends Model
{
    protected $fillable = ['item','unit','orderType', 'name', 'address', 'contact', 'table', 'subject'];
      public function order(){
      	return$this->belongsTo('App\syanOrder', 'orderType');
      }
}
