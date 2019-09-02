<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiaire extends Model
{
    public function demandes()
    {
    	return $this->hasMany('App\Models\Demande');
    }
}
