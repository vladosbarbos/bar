<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function alcohols(){
        return $this->belongsToMany('App\Alcohol')->withPivot('quantity', 'unit');
    }
}
