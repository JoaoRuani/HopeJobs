@extends('layouts.app')

@section('content')
    <div class="container">
        @if (empty(Auth::user()->curriculo))
            <div class="jumbotron">
                <h1 class="display-4">Você já está Cadastrado!</h1>
                <p class="lead">Agora, para poder candidatar-se às vagas você precisará cadastrar o seu currículo, é bem
                    rápido!</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="{{ route('curriculo.create') }}" role="button">Cadastrar Agora</a>
            </div>
        @endif
    </div>
@endsection
