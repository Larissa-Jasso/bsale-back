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

    public function Products(Request $request)
    {

        try {
            $products = Product::select('*');

            if ($request->name !== null) {
                $products->where('name', 'like', "%{$request->name}%");
            }

            if ($request->category !== null) {
                $products->where('category', $request->category);
            }

            if ($request->alphabetic == true) {
                $products->orderBy('name', 'asc');
            }
            if ($request->price == true) {
                $products->orderBy('price', 'asc');
            }
            if ($request->discount == true) {
                $products->where('discount', '!=', 0);
            }
            return response()->json($products->get());

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
 
}
