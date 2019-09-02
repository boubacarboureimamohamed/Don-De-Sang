<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupement extends Model
{
    public function ligne_demande()
    {
    	return $this->hasMany('App\Models\LigneDemande');
    }
}
