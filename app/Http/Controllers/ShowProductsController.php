<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ShowProductsController extends Controller
{
    public function ProductsByCategory($id)
    {
        $products = Product::where('category', $id)->get();
        return view('ShowProducts', compact('products'));
    }

    public function ProductsByid($id)
    {

        $products = Product::where('id', $id)->get();

        return view('ShowProductsById', compact('products'));
    }
}
