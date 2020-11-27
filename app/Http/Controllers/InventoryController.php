<?php

namespace App\Http\Controllers;
use App\Inventory;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
    	//return a view of all inventories from the database
    	$inventories = Inventory::get();
    	return view('inventory.index', compact('inventories'));

    }

}
