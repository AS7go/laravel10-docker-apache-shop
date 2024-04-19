<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {

        $products=Product::all();
        foreach($products as $product){
            echo '<br>Title: ' . $product->title. ' - Price: ' . $product->price;
            echo '<br>---------';
        }
        // $products = Product::where('id', 3)->first();
        // dd($products);

        return view('home.index');
    }
}
