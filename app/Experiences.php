<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    public function detail_experiences()
    {
        return $this->hasMany('App\DetailExperiences');
    }
}
