<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // по id - resources/views/home/index.blade.php строка 162 ['category', $product->id]
    public function show($cat, $product_id){
        $item = Product::where('id',$product_id)->first();

        return view('product.show', [
            'item'=>$item
        ]);
    }

    // // по alias - resources/views/home/index.blade.php строка 163 ['category', $product->alias]
    // public function show($cat, $product_alias){
    //     $item = Product::where('alias', $product_alias)->first();
    //     // dd($item);
    //     return view('product.show', [
    //         'item' => $item
    //     ]);
    // }

    public function showCategory(Request $request, $cat_alias)
    {
        $cat = Category::where('alias', $cat_alias)->first();
        
        $paginate = 2;
        $products = Product::where('category_id',$cat->id)->paginate($paginate);
        // $products = Product::where('category_id',$cat->id)->get();

        if(isset($request->orderBy)){
            if($request->orderBy == 'price-low-hight'){
                $products = Product::where('category_id',$cat->id)->orderBy('price')->paginate($paginate);
            }
            if($request->orderBy == 'price-hight-low'){
                $products = Product::where('category_id',$cat->id)->orderBy('price','desc')->paginate($paginate);
            }
            if($request->orderBy == 'name-a-z'){
                $products = Product::where('category_id',$cat->id)->orderBy('title')->paginate($paginate);
            }
            if($request->orderBy == 'name-z-a'){
                $products = Product::where('category_id',$cat->id)->orderBy('title','desc')->paginate($paginate);
            }

        }
        // выводит кусок кода html
        if($request->ajax()){
            return view('ajax.order-by',[
                'products'=>$products
            ])->render();
        }
        
        return view('categories.index', [
            'cat' => $cat,
            'products'=>$products,
        ]);
    }
}
