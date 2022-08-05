<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller{
    function index(){
        $refeicoes = DB::table('refeicoes')->get();
        $cardapios = DB::table('cardapios')
        ->join('refeicoes','cardapios.refeicao_id','=','refeicoes.id')
        ->select(
           'cardapios.id',
            'cardapios.dtref',
            'cardapios.tipo_refeicao',
            'cardapios.refeicao_id',
            'refeicoes.nome as nome_refeicao'
            )
        ->get();

        return view('cardapios.index', [
            'cardapios' => $cardapios,
            'refeicoes' => $refeicoes,
        ]);
    }

    function create(){
        $refeicoes = DB::table('refeicoes')->get();

        return view('cardapios.create',['refeicoes'=>$refeicoes]);
    }

    function store(Request $request){
        $data = $request->all();

        unset($data['_token']);


        DB::table('cardapios')->insert($data);

        return redirect('/cardapio');
    }

    function edit($id){

        $refeicoes = DB::table('refeicoes')->get();
        $cardapio = DB::table('cardapios')->find($id);
        return view('cardapios.edit', ['cardapio' => $cardapio,'refeicoes'=>$refeicoes]);

    }

    function update(Request $request){
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE cardapios
            SET
                dtref = :dtref,
                tipo_refeicao = :tipo_refeicao,
                refeicao_id = :refeicao_id
            WHERE
                id = :id
        ", $data);

        return redirect('/cardapio');
    }



    function destroy($id){
        DB::delete("DELETE FROM cardapios WHERE id = ?", [$id]);

        return redirect('/cardapio');
    }
}
