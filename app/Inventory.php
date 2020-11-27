<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //shows a relationship from the Products model specifying that each inventory belongs to a product
    public function products()
    {
    	return $this->belongsTo(Products::class); 
    }
}
