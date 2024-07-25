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
        if ($request->has('category_id')) {
            $categoryIds = explode(',', $request->input('category_id'));
            $query->whereIn('category_id', $categoryIds);
        }

        // Filter by subcategory ID
        if ($request->has('subcategory_id')) {
            $query->where('sub_category_id', $request->input('subcategory_id'));
        }

        // Filter by size ID
        if ($request->has('size_id')) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->where('product_size_id', $request->input('size_id'));
            });
        }

        // Filter by color ID
        if ($request->has('color_id')) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->where('product_color_id', $request->input('color_id'));
            });
        }

        // Filter by occasion ID
        if ($request->has('occution_id')) {
            $query->where('occution_id', $request->input('occution_id'));
        }

        // Filter by sub-occasion ID
        if ($request->has('suboccution_id')) {
            $query->where('sub_occution_id', $request->input('suboccution_id'));
        }

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        // Filter by name
        if ($request->has('name')) {
            $query->where('product_title', 'LIKE', '%' . $request->input('name') . '%');
        }

        // Sorting
        if ($request->has('sort_by')) {
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

        return response()->json($products);
    }
}
