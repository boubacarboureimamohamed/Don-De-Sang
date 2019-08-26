<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    protected $fillable =['poid', 'temperature', 'tension_arterielle','date_dossier_medical','approbation','observation_approbation','num_don','quantite_a_prelevee','type_prelevement','type_poche','observation_prelevement','quantite_prelevee','date_heure_prelevement','donneur_id'];
    public function donneur()
    {
        return $this->belongsTo('App\Models\Donneur');
    }
}
