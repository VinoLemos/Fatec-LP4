@extends('master')
@section('corpo')
	Nome: {{ $func->nome }}
	<br/>
	Endereço: {{ $func->endereco }}
	<br/>
	Data de Nascimento: {{ $func->dataNascimento }}
	<br/>
	Telefone: {{ $func->telefone }}
	<br/>
	Email: {{ $func->email }}
	<br/>
	Salário: {{ $func->salario}}

	<form action="/funcionario/{{ $func->id }}" method="get">
		@csrf
		@method('delete')
		<input type="submit" value="Confirmar" />
	</form>

	<a href="/funcionario">Voltar</a>
@endsection