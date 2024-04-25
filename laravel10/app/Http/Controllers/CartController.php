<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    // public function index()
    // {
    //     // Получаем cart_id из куки
    //     $cart_id = Cookie::get('cart_id');

    //     // Передаем cart_id в представление
    //     return view('cart.index', ['cart_id' => $cart_id]);
    // }


    public function addToCart(Request $request)
    {
        $product = Product::where('id', $request->id)->first();


        if (!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        // array format
        \Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->new_price ? $product->new_price : $product->price,
            'quantity' => (int)$request->qty,
            'attributes' => [
                'img'=> isset($product->images[0]->img) ? $product->images[0]->img : 'no_image.png'
            ]
        ]);

        return response()->json(\Cart::getContent());
    }
}
