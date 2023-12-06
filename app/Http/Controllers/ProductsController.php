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
        return view('home', ['products' => $products]);
    }

    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $product = Products::findOrFail($request->id);

        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => $request->quantity
            ];
        }
//        dd($cart);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

}
