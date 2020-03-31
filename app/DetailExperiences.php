<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailExperiences extends Model
{
    public function experiences()
    {
        return $this->belongsTo('App\Experiences');
    }
}
