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

    public function Products()
    {
        try {
            $products = Product::all();

            return response()->json($products);
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

    public function SearchProduct($name)
    {
        try {
            $products = Product::where('name', 'like',"%{$name}%")->get();

            return response()->json($products);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function SorterProduct($option)
    {
        try {
            if($option==1){
                $products = Product::orderBy('name','asc')->get();

            }else if($option==2){
                $products = Product::orderBy('price','asc')->get();

            }else if($option==3){
                $products = Product::where('discount','!=',0)->get();

            }

            return response()->json($products);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
