<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['quantite_sortie','quantite_reelle','groupement_id'];

    public function groupement()
    {
        return $this->belongsTo('App\Models\Groupement');
    }
}
