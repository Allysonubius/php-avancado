<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Rota /user
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
 

//Rota usuario
Route::prefix('v1') -> group(function(){
	Route::get('lista',function(){
		return ["a","b","c"];
	});

	Route::post('cadastra', function{
		echo 'implementar';
	});
});

//Versão api 2;
Route::prefix('v2') -> group(function(){
	//
});