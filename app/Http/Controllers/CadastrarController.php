<?php

namespace App\Http\Controllers;

use App\Cadastrar;
use App\Types;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function rotaCadastrar(){
        $tipos = Types::all();
        return view('/cadastrar')->with('tipos', $tipos);
    }

    public function Cadastrar(Request $request){
        
        $arquivo = $request->file('image');
        
        // if(empty($arquivo)){
        //      abort(400, 'nenhum arquivo foi enviado');
        //  }
            
        $nomePasta = 'uploads';

        $arquivo->storePublicly($nomePasta);
        $caminhoAbsoluto = public_path()."/storage/$nomePasta";

        $nomeArquivo = $arquivo->getClientOriginalName();
        
        $salvarNoBanco = "storage/$nomePasta/$nomeArquivo";
            
        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        Cadastrar::create([
            'image' => $salvarNoBanco,
            'type_id'=>$request->input('type_id'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'name'=>$request->input('name')
        ]);

        return redirect('/cadastrar');

    }

    public function index(){

        $photos = Cadastrar::all();

        return view('aleatorio')->with('imagens',$photos);

    }
    // public function busca(){
    //     return view('/busca');
    //}

    public function search(Request $request){

        $search = $request->input('search');
        //$dados = Cadastrar::where('name','LIKE','%'.$search.'%')->get();
        $data = Types::where('name','LIKE', '%'.$search.'%')->first();
        $idSearch = $data->id;
        $productSearch = Cadastrar::where('type_id','=',$idSearch)->get();
                
        //$image = Cadastrar::where('description','LIKE','%'.$search.'%')->get();
        $types = Cadastrar::all();
        

        return view('/search')->with('data',$productSearch);

    }
 



}
