<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model


{
<<<<<<< HEAD
  protected $fillable = ['libelle', 'email', 'adresse', 'telephone'];
   public function rdv()
   {
    
     return $this->belongsToMany('App\Models\Rdv');
   }
=======
    public function donneur()
    {
    	return $this->hasOne('App\Models\Donneur');
    }
>>>>>>> a6b2439973a8c6185fc1f8554c3725768109a73b
}
