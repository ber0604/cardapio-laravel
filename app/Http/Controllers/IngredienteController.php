<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredienteController extends Controller{
    function index(){
        $ingredientes = DB::table('ingredientes')
        ->get();

        return view('ingredientes.index', [
            'ingredientes' => $ingredientes
        ]);
    }

    function create(){
        return view('ingredientes.create');
    }

    function store(Request $request){
        $data = $request->all();

        unset($data['_token']);

        DB::table('ingredientes')->insert($data);

        return redirect('/ingrediente ');
    }

    function edit($id){

        $ingrediente = DB::table('ingredientes')->find($id);


        return view('ingredientes.edit', ['ingrediente' => $ingrediente]);

    }

    function update(Request $request){
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE ingredientes
            SET
                nome = :nome,
                calorias = :calorias
            WHERE
                id = :id
        ", $data);

        return redirect('/ingrediente');
    }


    function destroy($id){
        DB::delete("DELETE FROM ingredientes WHERE id = ?", [$id]);

        return redirect('/ingrediente');
    }
}
