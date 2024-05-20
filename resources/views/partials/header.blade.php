<header class="bg-white container d-flex justify-content-between align-items-center">
    <div id="logo" class="text-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
    </div>
    <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
            <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"
                        href="{{route('characters')}}">
                        Characters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}"
                        href="{{route('movies')}}">
                        Movies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'active' : '' }}"
                        href="{{route('tv')}}">
                        TV
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'active' : '' }}"
                        href="{{route('games')}}">
                        Games
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}"
                        href="{{route('collectibles')}}">
                        Collectibles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'active' : '' }}"
                        href="{{route('videos')}}">
                        Videos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'active' : '' }}"
                        href="{{route('fans')}}">
                        Fans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'news' ? 'active' : '' }}"
                        href="{{route('news')}}">
                        News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'shop' ? 'active' : '' }}"
                        href="{{route('shop')}}">
                        Shop
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
