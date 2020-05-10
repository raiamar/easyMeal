<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class syanMenu extends Model
{
      protected $fillable = ['name','price','cat_id'];

      public function childs(){
      	return $this->belongsTo('App\syanMenu','cat_id');
      }
}
