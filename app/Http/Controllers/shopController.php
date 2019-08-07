<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Orders;
use App\ItemOrder;

class shopController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('/finish', ['products'=>$products]);
    }
   
    
 public function add(Request $res, $idProduct){
     //pergunta se existe uma sessão ativa
    
    if($res->session()->has('cart')){ 
        $cart = $res->session()->get('cart');
        
       //pegar as info do usuario
        $user = Auth::user();
        //criar uma nova compra
        $newOrder = new Orders();
        $newOrder->user_id = $user->id;
        $newOrder->save();

        foreach ($cart as $product) {
            $newItemOrder = new ItemOrder();
            $newItemOrder->product_id = $product;
            $newItemOrder->orders_id = $newOrder->id;
            $newItemOrder->save();
        }
        $res->session ()->flush();
        return redirect('home');
        
    }else {
        $cart = [$idProduct];
        $res->session()->put('cart', $cart);
        return redirect('/cart');
    }
 }
}
