<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{

    public function index(){
        return view('cadastro');
    }

    public function create(Request $form){

        $usuario = new Usuarios();

        $usuario->name = $form->name;
        $usuario->username = $form->username;
        $usuario->password = Hash::make($form->password);

        $usuario->save();

        return redirect('login');
    }
}
