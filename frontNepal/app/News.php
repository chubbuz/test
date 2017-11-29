<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user(){
    	return $this->belongsTO('App\User');
    }
}
