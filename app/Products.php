<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //shows a relationship from the Store model specfying that each product belongs to a store
    public function stores()
    {
    	return $this->belongsTo(Stores::class); 
    }
    //shows a relationship from the Inventory model specifying that each product has their own transactions
     public function inventories()
    {
    	return $this->hasMany(Inventory::class);
    }
}
