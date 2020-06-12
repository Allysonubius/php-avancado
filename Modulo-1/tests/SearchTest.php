<?php

use PHPUnit\Framework\TestCase;
use allys\modulo\Search;

class SearchTest extends TestCase{
	/**
	*	@dataProvider dadosTeste
	*/
	public function testGetaddressFromZipcodeDefaultUsage(string $input, array $esperado){
		$resultado = new Search;
        $resultado = $resultado -> getAddressFromZipcode($input);
        $this -> assertEquals($esperado,$resultado);

		print_r($resultado);
		exit;
	}

	public function dadosTeste(){
		return [
			/*
			"Endereço Paraça do Sé" => {
				"01001000",
				[
					
					"cep" => "03624-010",
		        	"logradouro" => "Rua Luís Asson",
		        	"complemento" => "", 
		        	"bairro" => "Vila Buenos Aires",
		        	"localidade" => "São Paulo",
		        	"uf" => "SP",
		        	"unidade" => "",
		        	"ibge" => "3550308",
		        	"gia" => "1004"
		        	
				]
            }
            */
		];
	}
}
