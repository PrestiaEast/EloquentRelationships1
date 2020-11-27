<?php

namespace App\Http\Controllers;
use App\Stores;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index()
    {
    	// To view all stores from the database
    	$stores = Stores::get();
    	// View all store but with a view file under res\views\stores\index
    	return view('stores.index', compact('stores'));

    }

     public function show(Stores $stores)
    {
    	//display a view @ res\views\stores\show which will show the products from a specific store
    	return view('stores.show', compact('stores'));

    }
}
