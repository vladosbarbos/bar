<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    public function recipes(){
        return $this->belongsToMany('App\Recipe')->withPivot('quantity', 'unit');
    }
}
