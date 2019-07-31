<?php

namespace App\Http\Controllers;

use App\Types;
use App\Cadastrar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
       public function product(){
        //$info = $request->all();
        $info = Cadastrar::all();
        return view('home')->with('dados',$info);
    }

    public function knowMore(Request $request,$id){

        $query = Cadastrar::find($id);

        return view('knowMore', ['query'=>$query]);
    }        
}
