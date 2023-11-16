<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::where('prices', '<', 10)->get();
        return view('home', ['products' => $products]);
    }

}
