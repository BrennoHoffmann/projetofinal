<?php

namespace App\Http\Controllers;

use App\Cadastrar;
use App\Types;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function rotaCadastrar(){
        $tipos = Types::all();
        return view('/cadastrar')->with('type', $tipos);
    }

    public function Cadastrar(Request $request){
        
        $arquivo = $request->file('image');
        
        if(empty($arquivo)){
             abort(400, 'nenhum arquivo foi enviado');
         }

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

        return redirect('/aleatorio');

    }

    public function index(){

        $photos = Cadastrar::all();

        return view('aleatorio')->with('imagens',$photos);

    }

    public function busca(Request $request){

        $search = $request->input('search');
        $imagens = Cadastrar::where('name','LIKE','%'.$search.'%')->get();
        $image = Cadastrar::where('description','LIKE','%'.$search.'%')->get();
        $type = Types::all();

        return view('/aleatorio')->with('type',$type)->with('imagens', $imagens);

    }


}
