@extends('layout.main')

@section('content')

<main>
    <div class="jumbotron">
      <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo">
    </div>


    <div class="container">
      <div class="title">
        <h4>CURRENT SERIES</h4>
      </div>

      <div class="ds-row">
        @foreach (config('comics') as $item)
        <div class="box">
            <div class="card">
              <img src="{{ $item['thumb'] }}" alt="type">
              <span>{{ $item['title'] }}</span>
              <div class="circle">{{ $item['price'] }}</div>
            </div>
        </div>
        @endforeach
      </div>

      <div class="more">
        <h5>LOAD MORE</h5>
      </div>
    </div>

    <div class="shop">
      <div class="container">
        <nav>
          <ul>
              @foreach (config('menus.shop') as $link)
              <li>
                <img src="{{ Vite::asset('resources/img/' . $link['img']) }}" alt="imgShop">
                <a href="#">{{ $link['name'] }}</a>
              </li>
              @endforeach
          </ul>
        </nav>
      </div>
    </div>
</main>

@endsection

