<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable =['num_donneur', 'nom', 'prenom','date_naiss','lieu_naiss','sexe','adresse',
    'nationalite','profession','telephone', 'email','typedonneur_id','organisation_id'];

    public function beneficiaire()
    {
        return $this->belongsTo('App\Models\Beneficiaire');
    }
    public function ligne_demandes()
    {
    	return $this->hasMany('App\Models\LigneDemande');
    }
}
