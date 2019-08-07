<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Collection;

class CartController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('/cart', ['products'=>$products]);
    }
   
    
 public function add(Request $res, $idProduct){
     //pergunta se existe uma sessão ativa
    
    if($res->session()->has('cart')){ 
        $cart = $res->session()->get('cart');
        
        $cart[] = $idProduct;
        $res->session()->put('cart', $cart);
        return redirect('/cart');
        
    }else {
        $cart = [$idProduct];
        $res->session()->put('cart', $cart);
        return redirect('/cart');
    }
 }
 public function viewCart(Request $res)
 {
    
    $cart = $res->session()->get('cart');
    if ($cart == null) {
        return view('cart', ['products' =>[]] );
    }

   $products = Product::find($cart);
   //  dd($products);

    return view('cart', ['products' => $products ]);
 }
    
}
