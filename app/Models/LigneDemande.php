<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneDemande extends Model
{
    public function demande()
    {
        return $this->belongsTo('App\Models\Demande');
    }
    public function livraison()
    {
        return $this->belongsTo('App\Models\Livraison');
    }
    public function groupement()
    {
        return $this->belongsTo('App\Models\Groupement');
    }
}
