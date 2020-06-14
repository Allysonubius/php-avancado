<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController
{
	/**
	*	@Route("/", methods={`"GET"})
	*/
	public function index() : Response
	{
		return new Respnse("Implementar formulário de cadastro");
	}

	/**
	*	@Route("/salvar", methods={"POST"})
	*/
	public function salvar() : Response
	{
		return new Respose("implementar gravação ao banco de dados.");
	}
}