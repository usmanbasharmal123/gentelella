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
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
 
<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/icheck-flat-green.css') }}" rel="stylesheet">

<link href="{{ asset('css/bootstrap-progressbar.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/jqvmap.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
<link href="{{ asset('css/gentelella-custom.min.css') }}" rel="stylesheet">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    


 <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>

 <script src="{{ asset('js/nprogress.js') }}"></script>
 <script src="{{ asset('js/Chart.min.js') }}"></script>
 <script src="{{ asset('js/gauge.min.js') }}"></script>

 <script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
 <script src="{{ asset('js/icheck.min.js') }}"></script>
 <script src="{{ asset('js/skycons.js') }}"></script>

 <script src="{{ asset('js/jquery.flot.js') }}"></script>
 <script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
 <script src="{{ asset('js/jquery.flot.time.js') }}"></script>

 <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.orderBars.js') }}"></script>

 <script src="{{ asset('js/jquery.flot.spline.min.js') }}"></script>
 <script src="{{ asset('js/flot.curvedLines.js') }}"></script>

 <script src="{{ asset('js/date.js') }}"></script>
 <script src="{{ asset('js/jqvmap.js') }}"></script>
 <script src="{{ asset('js/jqvmap.world.js') }}"></script>

 <script src="{{ asset('js/jqvmap.sampledata.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/bootstrap-daterangepicker.js') }}"></script>
<script src="{{ asset('js/gentelella-custom.js') }}"></script>
</body>
</html>
