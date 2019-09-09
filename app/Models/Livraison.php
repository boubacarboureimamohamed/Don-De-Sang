<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    protected $fillable =['quantite_livree', 'date'];

    public function ligne_demande()
    {
    	return $this->hasMany('App\Models\LigneDemande');
    }
}
