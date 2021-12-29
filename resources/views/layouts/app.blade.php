<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav_custom_link {
            margin-left:1.5rem !important;
            font-weight:500;
            color:#000 !important;
        }
        .active_link {
            border-bottom:2px solid #000;
        }
    </style>
</head>
<body>
    <div id="app">
        @auth
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{ asset('img/connect_logo.png') }}" alt="" style="width:80%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mx-auto">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('home')) ? 'active_link' : '' }}" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav_custom_link {{ (request()->is('post*')) ? 'active_link' : '' }} {{ (request()->is('category*')) ? 'active_link' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('Post') }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('post.index') }}">
                                            {{ __('All Posts') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('category.index') }}">
                                            {{ __('Categories') }}
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('page*')) ? 'active_link' : '' }}" href="{{ route('page.index') }}">{{ __('Pages') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('media*')) ? 'active_link' : '' }}" href="{{ route('media.index') }}">{{ __('Media') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('menu*')) ? 'active_link' : '' }}" href="{{ route('menu.index') }}">{{ __('Menu') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('neighborhood*')) ? 'active_link' : '' }}" href="{{ route('neighborhood.index') }}">{{ __('Neighborhood') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('developer*')) ? 'active_link' : '' }}" href="{{ route('developer.index') }}">{{ __('Developer') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_custom_link {{ (request()->is('project*')) ? 'active_link' : '' }}" href="{{ route('project.index') }}">{{ __('Projects') }}</a>
                                </li>
                            </ul>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav_custom_link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ ucwords(Auth::user()->name) }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
