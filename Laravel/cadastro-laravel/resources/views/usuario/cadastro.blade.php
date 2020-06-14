@extends('layot.base')

@section('titulo','cadastro de usuário')

@section('contedo')
	<form action="{{route('salvar')}}" method="post" > 
		<div class="field">
			//Campo de validação
			{{csrf_field()}}
			//Input
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome">
		</div>
		<div class="field">
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
		</div>
		<div class="field">
			<label for="senha">Email: </label>
			<input type="password" name="senha" id="senha">
		</div>
		<div class="btn">
			<button type="submit">Salvar</button>
		</div>
	</form>
@endesction