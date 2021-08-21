<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquete;

class EnquetesController extends Controller
{
    public function index(){
        
        $enquetes =  Enquete::orderBy('data_inicio','desc')->get();
        

        return view('enquete', ['enquete' => $enquetes]);
    }

    public function criar(){
        return view('criar');
    }

    public function store(Request $request){
        $enquete = new Enquete;
        $cont_resposta1 = 0;
        $cont_resposta2 = 0;
        $cont_resposta3 = 0;

        $enquete->titulo = $request->titulo;
        $enquete->data_inicio = $request->data_inicio;
        $enquete->data_fim = $request->data_fim;
        $enquete->resposta_1 = $request->resposta_1;
        $enquete->resposta_2 = $request->resposta_2;
        $enquete->resposta_3 = $request->resposta_3;
        $enquete->cont_resposta_1 = $cont_resposta1;
        $enquete->cont_resposta_2 = $cont_resposta2;
        $enquete->cont_resposta_3 = $cont_resposta3;


        $enquete->save();
        
        return redirect ('/');
    }

    public function show($id){
        $enquete = Enquete::findOrFail($id);

        return view('page', ['enquete'=> $enquete]);
    }

    public function atualizarview($id){
        $enquete = Enquete::findOrFail($id);

        return view('atualizar',['enquete'=>$enquete]);
    }

    public function resposta1($id){
        $enquete = Enquete::find($id)->increment('cont_resposta_1', 1);
        return back();
    }

    public function resposta2($id){
        $enquete = Enquete::find($id)->increment('cont_resposta_2', 1);
        return back();
    }

    public function resposta3($id){
        $enquete = Enquete::find($id)->increment('cont_resposta_3', 1);
        return back();
    }

    public function deletar($id){
        $enquete = Enquete::find($id)->delete('$id');
        return redirect('/');
    }

    public function atualizar(Request $request){
        Enquete::findOrFail($request->id)->update($request->all());
        
        return redirect ('/');

    }


}
