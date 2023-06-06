@extends('layout.main')

@section('content')

    <main>
        <div class="container">
            <div class="comic">
                <h1>{{ $comic['title'] }}</h1>
                <div class="box-comic">
                    <div class="left">
                        <p>{{ $comic['description'] }}</p>
                        <span><strong>Artisti: </strong>{{ implode(", ", $comic['artists']) }}</span>
                        <span><strong>Scrittori: </strong>{{ implode(", ", $comic['writers']) }}</span>
                        <span><strong>Serie:</strong> {{ $comic['series'] }}</span>
                        <span><strong>Tipo: </strong>{{ $comic['type'] }}</span>
                        <span><strong>Data di pubblicazione: </strong>{{ $comic['sale_date'] }}</span>
                        <span><strong>Prezzo: </strong>{{ $comic['price'] }}</span>
                    </div>
                    <div class="right">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
