<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{    
    protected $fillable =['poid', 'temperature', 'tension_arterielle','date_dossier_medical','approbation',
    'observation_approbation','num_don','type_prelevement','type_poche',
    'observation_prelevement','quantite_prelevee','date_heure_prelevement','rejet','motif_rejet',
    'donneur_id','groupement_id'];

    public function donneur()
    {
        return $this->belongsTo('App\Models\Donneur');
    }
    public function groupement()
    {
        return $this->belongsTo('App\Models\Groupement');
    }
}
