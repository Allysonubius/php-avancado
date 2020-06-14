<?php

namespace App\Controller\API;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Annotation\JsonResponse;

class UsuarioController
{

	/**
	*	@Route("/lista", methods={"GET"}, name="lista")
	*/

	public function lista() : JsonResponse
	{
		return new JsonResponse(["Implementar lista na API", 404]);
	}

	/**
	*	@Route("/cadastra", methods={"POST"}, name="cadastra")
	*/

	public function cadastra() : JsonResponse
	{
		return new JsonResponse(["Implementar cadastro API", 404]);
	}
}
