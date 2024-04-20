<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at')->take(8)->get();

        return view('home.index', [
            'products'=>$products
        ]);
     
        // $products=Product::all();
        // foreach($products as $product){
        //     echo '<br>Title: ' . $product->title. ' - Price: ' . $product->price;
        //     echo '<br>---------';
        // }
        // dd($products);

        // return view('welcome');
    }
}
