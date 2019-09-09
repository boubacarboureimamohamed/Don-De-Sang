<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupement extends Model
{
    protected $fillable =['groupe_sanguin'];

    public function ligne_demande()
    {
    	return $this->hasMany('App\Models\LigneDemande');
    }
    public function dossierMedicals()
    {
        return $this->hasMany('App\Models\DossierMedical');
    }
}
