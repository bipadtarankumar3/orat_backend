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
    public function products(Request $request)
    {
        // Initialize the query builder
        $query = Product::query();

        // Filter by multiple category IDs
        if (!empty($request->input('category_id')) && $request->has('category_id')) {
            $categoryIds = explode(',', $request->input('category_id'));
            $query->whereIn('category_id', $categoryIds);
        }

        // Filter by subcategory ID
        if (!empty($request->input('subcategory_id')) && $request->has('subcategory_id')) {
            $query->where('sub_category_id', $request->input('subcategory_id'));
        }

        // Filter by size ID
        if (!empty($request->input('size_id')) && $request->has('size_id')) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->where('product_size_id', $request->input('size_id'));
            });
        }

        // Filter by color ID
        if (!empty($request->input('color_id')) && $request->has('color_id')) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->where('product_color_id', $request->input('color_id'));
            });
        }

        // Filter by occasion ID
        if (!empty($request->input('occution_id')) && $request->has('occution_id')) {
            $query->where('occution_id', $request->input('occution_id'));
        }

        // Filter by sub-occasion ID
        if (!empty($request->input('suboccution_id')) && $request->has('suboccution_id')) {
            $query->where('sub_occution_id', $request->input('suboccution_id'));
        }

        // Filter by price range
        if (!empty($request->input('min_price')) && $request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        // Filter by name
        if (!empty($request->input('name')) && $request->has('name')) {
            $query->where('product_title', 'LIKE', '%' . $request->input('name') . '%');
        }

        // Sorting
        if (!empty($request->input('sort_by')) && $request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            switch ($sortBy) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('product_title', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('product_title', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                default:
                    // Default sorting
                    $query->orderBy('product_title', 'asc');
                    break;
            }
        }

        // Handle offset and limit
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $query->offset($offset)->limit($limit);

        // Get the results
        $products = $query->get();

        // Get total count for pagination
        $total = Product::count();

        return response()->json([
            'products' => $products,
            'total' => $total,
            'offset' => $offset,
            'limit' => $limit,
            'hasMore' => ($offset + $limit) < $total,
        ]);
    }

    public function singleProduct($id)
    {
        try {
            // Fetch the product with relationships
            $product = Product::with([
                'tags',
                'types',
                'variants',
                'variants.size', // assuming you have a size relationship in ProductVariant
                'variants.color', // assuming you have a color relationship in ProductVariant
                'images',
                'category',
                'subCategory',
                'occasion', // assuming you have an occasion relationship
                'subOccasion', // assuming you have a sub-occasion relationship
                'designer' // assuming you have a designer relationship
            ])->findOrFail($id);
    
            // Fetch similar products
            $similarProducts = Product::where('category_id', $product->category_id)
                ->where('id', '!=', $product->id)
                ->limit(5)
                ->get();
    
            return response()->json([
                'product' => $product,
                'similar_products' => $similarProducts->isEmpty() ? [] : $similarProducts,
            ]);
        } catch (\Exception $e) {
            // Catch and return any exception with a 500 status code
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    
    
    

}
