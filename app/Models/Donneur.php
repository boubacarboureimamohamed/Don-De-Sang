<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donneur extends Model
{
    protected $fillable =['num_donneur', 'nom', 'prenom','date_naiss','lieu_naiss','sexe','adresse','nationalite','profession','telephone', 'email','typedonneur_id','organisation_id'];

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
