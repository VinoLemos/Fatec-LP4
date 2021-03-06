@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bem vindo!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Você está logado!') }}

                </div>
            </div>

            <a href="/funcionario">Início</a> |
            <a href="/funcionario/create">Inserir Funcionário</a>
        </div>
    </div>
</div>
</div>
</div>


@endsection