<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SituationMat extends Model
{
    public function donneurs()
    {
        return $this->belongsToMany('App\Donneur', 'situation_mat_donneur')->withPivot([
            'date'
        ]);
    }
}
