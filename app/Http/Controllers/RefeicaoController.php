<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class refeicaoController extends Controller{
    function index(){
        $ingredientes = DB::table('ingredientes')->get();
        $refeicoes = DB::table('refeicoes')
        ->join('ingredientes','refeicoes.ingrediente_id','=','ingredientes.id')
        ->select(
            'refeicoes.id',
            'refeicoes.nome',
            'refeicoes.ingrediente_id',
            'ingredientes.nome as nome_ingrediente'
            )
        ->get();

        return view('refeicoes.index', [
            'refeicoes' => $refeicoes,
            'ingredientes'=>$ingredientes,
        ]);
    }

    function create(){
        $ingredientes = DB::table('ingredientes')->get();

        return view('refeicoes.create',['ingredientes'=> $ingredientes]);
    }

    function store(Request $request){

        $data = $request->all();
        unset($data['_token']);
        DB::table('refeicoes')->insert($data);
        return redirect('/refeicao');
    }

    function edit($id){
    
        $refeicao = DB::table('refeicoes')->find($id);
        return view('refeicoes.edit', ['refeicao' => $refeicao]);

    }

    function update(Request $request){
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE refeicoes
            SET
                nome = :nome,
                ingrediente_id = :ingrediente_id
            WHERE
                id = :id
        ", $data);

        return redirect('/refeicao');
    }


    function destroy($id){
        DB::delete("DELETE FROM refeicoes WHERE id = ?", [$id]);

        return redirect('/refeicao');
    }
}
