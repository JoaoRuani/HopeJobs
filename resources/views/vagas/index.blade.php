@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-deck">
        @foreach($vagas as $vaga)
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div style="width: 70px; height: 70px; object-fit: cover;">
                        <img class="img-thumbnail" src="{{$vaga['company']['logo']}}" alt="{{$vaga['company']['name']}}">
                    </div>
                    <h3 class="ml-2">{{$vaga['company']['name']}}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $vaga['title'] }}</h5>
                    <p class="card-text">{!! $vaga['responsibilities'] !!}</p>
                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::create($vaga['created_at'])->diffForHumans(now()) }}</small></p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
