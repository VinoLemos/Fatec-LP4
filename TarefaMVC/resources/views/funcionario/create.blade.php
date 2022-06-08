@extends('master')
@section('corpo')
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    <form action="/funcionario" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data de Nascimento</label>
            <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Criar" class="form-control">
        </div>
    </form>
    </div>
    </div>
    </div>
    <a href="/funcionario" class="btn btn-primary">Voltar</a>
@endsection