<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Usuario as UsuarioModel;

class usuario extends Controller
{
    public function cadastrar()
    {
    	return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
    	$request -> validate([
    		"nome" => "required",
    		"email" => "required | email"
    		"senha" => "required | min:5"
    	]);
    	UsuarioModel::cadastrar($request);

    	return view('usuario.sucesso');

    }
}
