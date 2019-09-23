<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Donneur extends Model
{
    /* use AutoNumberTrait; */
    protected $fillable =['num_donneur', 'nom', 'prenom','date_naiss','lieu_naiss','sexe','adresse',
    'nationalite','profession','telephone', 'email','organisation_id'];

    public function organisation()
    {
        return $this->belongsTo('App\Models\Organisation');
    }

    public function situationmats()
    {
        return $this->belongsToMany('App\Models\SituationMat', 'situation_mat_donneur')->withPivot([
            'date'
        ]);
    }

    public function dossierMedicals()
    {
        return $this->hasMany('App\Models\DossierMedical');
    }
    public function historisations()
    {
        return $this->hasMany('App\Models\Historisation');
    }

    public function typedonneurs()
    {
        return $this->belongsToMany('App\Models\Typedonneur', 'typedonneur_donneur')->withPivot([
            'date'
        ]);
    }
}
