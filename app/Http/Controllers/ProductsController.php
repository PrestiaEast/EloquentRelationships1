<?php

namespace App\Http\Controllers;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	// To view all products from the database
    	$products = Products::get();
    	// returns a view file under res\views\products\index
    	return view('products.index', compact('products'));

    }

	public function show(Products $products)
    {
    	//display a view @ res\views\products\show which will display the inventory or transactions from a specific product
    	return view('products.show', compact('products'));

    }
}
