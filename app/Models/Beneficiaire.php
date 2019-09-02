<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiaire extends Model
{
    protected $fillable =['libelle', 'adresse', 'telephone','email'];

    public function demandes()
    {
    	return $this->hasMany('App\Models\Demande');
    }
}
