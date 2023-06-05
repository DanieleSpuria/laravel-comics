<footer>

    <div class="top">
      <div class="container">
        <div class="left">
          <div class="col">
            <h3>DC COMICS</h3>
            <nav>
              <ul>
                @foreach (config('menus.dcComics') as $link)
                <li>
                <a href="#">{{ $link['name'] }}</a>
                </li>
                @endforeach
              </ul>
            </nav>

            <h3>SHOP</h3>
            <nav>
              <ul>
                @foreach (config('menus.shop') as $link)
                <li>
                <a href="#">{{ $link['name'] }}</a>
                </li>
                @endforeach
              </ul>
            </nav>
          </div>

          <div class="col">
            <h3>DC</h3>
            <nav>
              <ul>
                @foreach (config('menus.dC') as $link)
                <li>
                <a href="#">{{ $link['name'] }}</a>
                </li>
                @endforeach
              </ul>
            </nav>
          </div>

          <div class="col">
            <h3>SITES</h3>
            <nav>
              <ul>
                @foreach (config('menus.sites') as $link)
                <li>
                <a href="#">{{ $link['name'] }}</a>
                </li>
                @endforeach
              </ul>
            </nav>
          </div>
        </div>

        <div class="right">
          <img src="/img/dc-logo-bg.png" alt="DC">
        </div>
      </div>
    </div>

    <div class="bottom">
      <div class="container">
        <button>
          <h3>SIGN-UP NOW!</h3>
        </button>

        <div class="social">
          <h3>FOLLOW US</h3>
          @foreach (config('menus.social') as $logo)
          <div class="circle">
            <a href="#">
                <img src="{{ Vite::asset('resources/img/' . $logo['img']) }}" alt="social">
            </a>
        </div>
        @endforeach
        </div>
      </div>
    </div>

</footer>
