<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
//        $products = Products::where('prices', '<', 10)->get();
        $clothingProducts = Products::where('categories', 'vetements')->get();
        $electronicsProducts = Products::where('categories', 'electronics')->get();
        return view('home', [
            'products' => $products, 
            'clothingProducts' => $clothingProducts,
            'electronicsProducts' => $electronicsProducts,
        ]);
    }

}
