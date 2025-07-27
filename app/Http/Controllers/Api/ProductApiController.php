<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    // public function index()
    // {
    //     return Product::with('images')->get();
    // }

    public function index()
    {
        $products = Product::with('images')->get();

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }
}
