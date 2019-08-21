<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
protected $fillable = ['date_heure', 'lieu', 'typerdv_id', 'organisation_id'];
   
    public function typerdv()
    {
        return $this->belongsTo('App\Models\Typerdv');    
    }
   public function organisation()
   {
    return $this->belongsTo('App\Models\Organisation');
   }

   
}
