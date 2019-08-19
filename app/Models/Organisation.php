<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public function donneur()
    {
    	return $this->hasOne('App\Models\Donneur');
    }
}
