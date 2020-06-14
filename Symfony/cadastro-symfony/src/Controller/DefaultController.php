<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

	public function index(Request $request) : Response
	{
		$resp = new Response();
		$res -> setContent(json_encode(
			[
				"recebido" => $request -> get('nome'),
				"ip" => $request -> getClientIp()
			]));
		$resp -> setStatusCode(200);

		return $resp;
	}
}
