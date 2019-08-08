<?php

namespace App\Http\Controllers;
use App\Cadastrar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function table(){
        $admin = Cadastrar::all();
        
    
      return view('admin')->with('table',$admin);
    }

    public function stock(){

    }

}
