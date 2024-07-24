<?php

namespace App\Http\Controllers\web_api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductApiController extends Controller
{
    public function home_products(Request $request)
    {
        $products = Product::with([
            'tags',
            'types',
            'variants',
            'images',
             'category',
            'subCategory'
        ])->get();

        return response()->json([
            'success' => true,
            'data' => $products,
            'message' => 'Category List'
        ]);

    }
}
