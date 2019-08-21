<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typerdv extends Model
{
    protected $fillable = ['type_rdv'];
    public function rdv()
    {
        return $this->belongsToMany('App\Models\Rdv');
    }
}
