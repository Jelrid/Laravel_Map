<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class debugcontroller extends Controller
{
    public function index(Request $request)
    {
        $data = Product::where('flatOrHouse', 'flat')->paginate(10);
        dd($data->toArray());
    }
}
