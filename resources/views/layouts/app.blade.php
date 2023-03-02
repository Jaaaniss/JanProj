<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <meta name="color-scheme" content="dark light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <title>JSneaks</title>
</head>
<body>
    <div id="app">
    <nav id="dedd" class="navbar navbarr navbar-dark ">
        <div class="picturenav">
                <img id="picturenav" style="align-self: center;margin: 0;margin-left: auto;margin-right: auto;" src="{{ asset('/image/LOGO2.png') }}" alt="Girl in a jacket" class="saturate">
            </div>
            <div class="dedis">
                <div class="deda">
                    <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px" width="30px">
                </div>
                
                <li class="dropdown-menu-left">
                    <div class="dropdown-menu">
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <div class="abidivi">
                                        <a href="/login" id="vjg"><b>Login</b> <span class="caret"></span></a>
                                        <a href="/register" id="vjg3"><b>New around here? Sign up</b> <span class="caret"></span></a>
                                    </div>
                                    
                                </li>
                            @endif
                        @else
                            <li class="nav-item-dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/editsize">
                                        {{ __('Edit your size') }}
                                    </a>
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
                    </div>
                  </li>
            </div>
    </nav>
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>