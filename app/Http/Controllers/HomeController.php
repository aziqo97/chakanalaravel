<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $categoryalar = Category::all();

        foreach ($category as $category) {

            $products = Product::where('category', $category->id)->get();

            $data[] = [
                'category' => $category,
                'products' => $products
            ];

        }
        return view('welcome', compact('data'), compact('categoryalar'));
    }

    public function order()
    {
if (isset($_COOKIE['tovar'])) {
foreach ($_COOKIE['tovar'] as $tovar) {
  $products = Product::where('id', $tovar)->get();
   $data[] = [
                'products' => $products
            ];
}




}else{
     $data[] = 0;
}
 return view('components.order', compact('data'));
    }
}
