<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable =['date', 'beneficiaire_id'];

    public function beneficiaire()
    {
        return $this->belongsTo('App\Models\Beneficiaire');
    }
    public function ligne_demandes()
    {
    	return $this->hasMany('App\Models\LigneDemande');
    }
}
