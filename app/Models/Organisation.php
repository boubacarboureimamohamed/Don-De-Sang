<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model


{
  protected $fillable = ['libelle', 'email', 'adresse', 'telephone'];
  
   public function rdv()
   {

     return $this->belongsToMany('App\Models\Rdv');
   }

    public function donneurs()
    {
    	return $this->belongsToMany('App\Models\Donneur', 'donneur_organisation')->withPivot([
        'date'
      ]);
    }
}
