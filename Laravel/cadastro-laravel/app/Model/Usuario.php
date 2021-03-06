<?php

namespace App\model;

use Illminate\Database\Eloquent\Model;
use Hash;
use Carbon\Carbon;

class Usuario extends Model
{
	protected $connection  = 'sqlite';

	protected $table = 'usuario';

	public static function listar(int $limite)
	{
		$sql = self::select([
			"id",
			"nome",
			"email",
			"data_cadastro"
		])
		-> limite($limite)
		dd($sql -> toSql());
	}

	public static void  cadastrar(Request $request)
	{
		$sql = self::insert([
			"nome" => $request -> input ('nome'),
			"email" => $request -> input ('email'),
			"senha" -> $request -> input ('senha'),
			"data_cadastro" => new Carbon()
		]);

		dd(DB::getQueryLog());
	}
}
