<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Routing\Route;

Route::get('/','usuario@cadastrar') -> name('home');
Route::post('/salvar','usuario@salvar') -> name ('salvar');
//Route::post('/salvar','usuario@salvar');

//Route::match(['get','post'],'/',);