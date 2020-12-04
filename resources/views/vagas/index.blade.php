@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-deck">
        @foreach($vagas as $vaga)
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-center">
                    <div>
                        <img class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover;" src="{{$vaga['company']['logo']}}" alt="{{$vaga['company']['name']}}">
                    </div>
                    <h3 class="ml-2 mb-0">{{$vaga['company']['name']}}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $vaga['title'] }}</h5>
                    <p class="card-text">{!! $vaga['responsibilities'] !!}</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <small class="text-muted">{{ \Carbon\Carbon::create($vaga['created_at'])->diffForHumans(now()) }}</small>
                    @guest
                    <form method="POST" action="{{route('vagas.aplicar', ['vaga_id' => $vaga['id']])}}">
                        @csrf
                        <button class="btn btn-primary" type="submit">Candidatar-se</button>
                    </form>
                    @else
                        @if($candidaturas->where('vaga_id', $vaga['id'])->count())
                            <button class="btn btn-primary" type="button">Já Candidatado</button>
                        @else
                            <form method="POST" action="{{route('vagas.aplicar', ['vaga_id' => $vaga['id']])}}">
                                @csrf
                                <button class="btn btn-primary" type="submit">Candidatar-se</button>
                            </form>
                        @endif
                    @endguest
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
