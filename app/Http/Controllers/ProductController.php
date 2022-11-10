<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Categories()
    {
        try {

            $categories = Category::all();

            return response()->json($categories);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function ProductsByCategory($id)
    {
        try {
            $products = Product::where('category', $id)->get();

            return response()->json($products);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function SearchProduct(Request $request)
    {
        try {
            $products = Product::where('name', $request->name)->get();

            return response()->json($products);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
