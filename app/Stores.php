<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{ 
    //shows a relationship from the Products model specifying that each store has its own productsa
    public function products()
    {
    	return $this->hasMany(Products::class);
    }
}
