<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProducts()
    {
        $products = [
            ["name" => "Phone"],
            ["name" => "Tablet"],
            ["name" => "Laptop"],
            ["name" => "Watch"],
            ["name" => "Television"],
            ["name" => "Freezer"],
        ];

        Product::insert($products);
        return "Product has been inserted";
    }

    public function search()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $datas = Product::select('name')
                -> where('name','LIKE','%($request->terms)%')
                ->get();
        return response()->json($datas);
    }
}
