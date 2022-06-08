@extends('master')
@section('corpo')
    <a href="/funcionario/create">Novo Funcionário</a>
    <table class="table table-striped">
    <tr><th>Nome</th><th>Endereço</th><th>DataNasc</th><th></th></tr>
    @foreach($funcs as $f)
      <tr>
        <td>{{ $f->id  }}</td>
        <td>{{ $f->nome  }}</td>
        <td>{{ $f->salario  }}</td>
        <td>{{ $f->dataNascimento }}</td>
        <td>{{ $f->endereco }}</td>      
        <td>{{ $f->telefone }}</td>  
        <td>{{ $f->email }}</td>
        <td>
        <a href="/funcionario/{{ $f->id }}">Excluir</a>
        <a href="/funcionario/{{ $f->id }}/edit">Alterar</a>
        </td>
      </tr>
    @endforeach
    </table>
@endsection