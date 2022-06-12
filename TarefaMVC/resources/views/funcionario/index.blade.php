@extends('master')
@section('corpo')
<a href="/funcionario/create" class="btn btn-primary">Novo Funcionário</a>  
<a href="/home" class="btn btn-primary">Voltar</a>

<table class="table table-striped">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Salário</th>
    <th>Data de Nascimento</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>Email</th>
  </tr>
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