<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin = "anonymous" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>

    <meta name="color-scheme" content="dark light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">



    <title>JSneaks</title>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="darkmodenavbar">

            <div class="picturenav">
                <a href="/">
                    <img id="picturenav" style="align-self: center;margin: 0;margin-left: auto;margin-right: auto;"
                        src="{{ asset('/image/LOGO2.png') }}" alt="Girl in a jacket" class="saturate">
                </a>
            </div>

            <div class="malaa1">
                <button id="krasaa" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end;">
                <div class="deda">
                    <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px"
                        width="30px">
                </div>
                <div class="navbar-nav">

                    <li class="dropdown-menu-left">
                        <div class="dropdown-menu">
                            @guest
                                @if (Route::has('login'))
                        <li class="nav-item">
                            <div class="abidivi">
                                <a href="/login" id="vjg"><b>Login</b> <span class="caret"></span></a>
                                <a href="/register" id="vjg3"><b>New around here? Sign up</b> <span
                                        class="caret"></span></a>
                            </div>
                        </li>
                        @endif
                    @else
                        <li style=" display: flex;flex-direction: column;align-items: flex-end;" class="nav-item-dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div style="position:absolute" class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown">
                                @if (Auth::user()->id == 1)
                                    <a class="dropdown-item" href="/manage_vans">
                                        {{ __('Manage sizes') }}
                                    </a>
                                @endif

                               {{--  @if (Auth::user()->id != 1)--}}
                                    <a class="dropdown-item" href="/user_profile">
                                        {{ __('My profile') }}
                                    </a>
                                {{--  @endif--}}

                                <a class="dropdown-item" href="/editsize">
                                    {{ __('Check or edit size') }}
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

    </div>

    <main class="blade" class="py-4">
        @yield('content')
    </main>

    <div class="footer">
        <div class="bak">
            <div class="box-1">
                <a id="nulll" href="/" class="btn9 btn9-one" role="button"><span>Back Home</span></a>
            </div>
        </div>
    </div>

</body>

</html>
