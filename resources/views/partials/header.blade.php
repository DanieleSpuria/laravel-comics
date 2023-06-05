<header>
    <div class="container">
      <img src="/img/dc-logo.png" alt="logo">
      <nav>
        <ul>
            @foreach (config('menus.nav_menu') as $link)
            <li>
              <a href="#" class="#"> {{ $link['name'] }} </a>
            </li>
            @endforeach
        </ul>
      </nav>
    </div>
</header>
