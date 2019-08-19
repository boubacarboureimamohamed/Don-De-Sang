<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typedonneur extends Model
{
    public function donneurs()
    {
    	return $this->hasMany('App\Models\Donneur');
    }
}
