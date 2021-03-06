<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
*	@Route("/", name="web_usuario_")
*/

class UsuarioController extends AbstractController
{
	/**
	*	@Route("/", methods={`"GET"}, name="index")
	*/
	public function index() : Response
	{
		return $this -> render("usuario/form.html.twig");
	}

	/**
	*	@Route("/salvar", methods={"POST"}, name="salvar")
	*/
	public function salvar() : Response
	{
		return new Respose("implementar gravação ao banco de dados.");
	}
}