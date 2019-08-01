<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CardController extends Controller
{
    
 public function add(Request $res, $idProduct){
     //pergunta se existe uma sessão ativa
    
    if($res->session()->has('cart')){
        $cart = $res->session()->get('cart');
        
        $cart[] = [$idProduct];
        $res->session()->put('cart', $cart);
        return "Deu bom caralho";
        
    }else {
        $cart = [[$idProduct]];
        $res->session()->put('cart', $cart);
        return "Deu bom ";
    }
 }
 public function viewCart(Request $res)
 {
    $cart = $res->session()->get('cart');
    $products = [];

    for ($i=0; $i < count($cart); $i++) { 
        $products[]=Product::find($cart[$i]);
    }
    dd($products);

    return view('shopcart', ['products' => $products, ]);
 }
    
}