<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = ['name','location','image'];
}
