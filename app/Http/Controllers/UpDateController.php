<?php

namespace App\Http\Controllers;

use App\Cadastrar;
Use App\Product;
use Illuminate\Http\Request;

class UpDateController extends Controller
{
    public function list(){
        $viewAll = Product::all();
        return view('/productsUPDATE')->with('viewAll',$viewAll);
    }
    
    public function toChange($id){

        $product = Product::find($id);
        
        return view('upDate')->with('product',$product);

    }    
   public function changing(Request $request, $id){
        
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->type_id = $request->type;

        $product->save();
        $viewAll = Product::all();
        return view('productsUPDATE')->with('updated',true)->with('viewAll',$viewAll);
    }

    public function delete($id){
        $product = Product::find($id);
        
        return view('delete')->with('product',$product);
    }

    public function showDelete($id){

        $product = Product::find($id);

        $product->delete();
        
        $viewAll = Product::all();
        return view('productsUPDATE')->with('deleted',true)->with('viewAll',$viewAll);

    }


}
