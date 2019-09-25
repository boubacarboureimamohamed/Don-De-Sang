<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typedonneur extends Model
{
    protected $fillable = ['type_donneur'];
    public function donneurs()
    {
        return $this->belongsToMany('App\Models\Donneur', 'typedonneur_donneur')->withPivot([
            'date'
        ]);
    }
}
