<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class DesktopController extends Controller
{
    public function show(){
        $recipe = Recipe::find(1);
        echo $recipe->name;
        echo '<br>';
        foreach ($recipe->alcohols as $alcohol){
            echo $alcohol->name;
            echo $alcohol->pivot->quantity;
            echo $alcohol->pivot->unit;
            echo '<br>';
        }
    }

    public function desktop(){
    return view('desktop');
    }
}
