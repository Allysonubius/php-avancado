@extends('layot.base')

@section('titulo','cadastro de usuário')

@section('contedo')
	<form action="{{route('salvar')}}" method="post" > 
		//Campo de validação
			{{csrf_field()}}
			//Input
		<div class="field">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome">
			@if($errors -> has ('nome'))
				@foreach($errors -> get('nome'))
					<strong class="erro">{{$erro}}</strong>
				@endforeach
			@endif
		</div>
		<div class="field">
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
			@if($errors -> has ('senha'))
				@foreach($errors -> get('senha'))
					<strong class="erro">{{$erro}}</strong>
				@endforeach
			@endif
		</div>
		<div class="field">
			<label for="senha">Email: </label>
			<input type="password" name="senha" id="senha">
			@if($errors -> has ('senha'))
				@foreach($errors -> get('senha'))
					<strong class="erro">{{$erro}}</strong>
				@endforeach
			@endif
		</div>
		<div class="btn">
			<button type="submit">Salvar</button>
		</div>
	</form>
@endesction