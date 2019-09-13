<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historisation extends Model
{
    protected $fillable = ['date', 'donneur_id'];
    public function donneurs()
    {
        return $this->belongsTo('App\Models\Donneur');
    }
}
