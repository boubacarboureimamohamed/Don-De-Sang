<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Donneur extends Model
{
    /* use AutoNumberTrait; */
    protected $fillable =['num_donneur', 'nom', 'prenom','date_naiss','lieu_naiss','sexe','adresse',
    'nationalite','profession','telephone', 'email','typedonneur_id','organisation_id'];

    public function organisation()
    {
        return $this->belongsTo('App\Models\Organisation');
    }

    public function typedonneur()
    {
        return $this->belongsTo('App\Models\Typedonneur');
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
    
}
