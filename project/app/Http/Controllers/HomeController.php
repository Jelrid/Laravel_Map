<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $coordinates = [];
        foreach ($products as $product) {
            $coordinates[] = [$product->coordinate];
        }

        return view('home', ['products' => $products, 'coordinates' => $coordinates]);
    }
}
