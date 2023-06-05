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

      <div class="row">
        <div class="box">
            <div class="card">
              <img src="#" alt="type">
              <span>#</span>
              <div class="circle">#</div>
            </div>
        </div>
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

