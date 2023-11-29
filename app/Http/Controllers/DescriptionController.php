<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function someMethod(Request $request)
    {
        $name = $request->route('name');
        $categories = $request->route('categories');
        $prices = $request->route('prices');
        $quantities = $request->route('quantities');
        $contents = $request->route('contents');
        // $image = $request->route('image');

        $product = Products::where('name', $name)
            ->where('categories', $categories)
            ->where('prices', $prices)
            ->where('quantities', $quantities)
            ->where('contents', $contents)
            // ->where('image', $image)
            ->first();

        $contentsArray = explode(' ', $product->contents);
        $contentsLines = array_chunk($contentsArray, 3);
        foreach ($contentsLines as $key => $line) {
            $contentsLines[$key] = implode(' ', $line);
        }
        $product->contents = implode('<br>', $contentsLines);

        return view('layouts.Description', ['product' => $product]);
    }
}
