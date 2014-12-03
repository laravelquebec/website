<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Quebec</title>
    <meta name="description" content="Groupe de discussion de Laravel à Québec">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ elixir('css/laravel.css') }}">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Basculer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('images/laravel-quebec-logo.svg') }}" alt="Laravel Quebec">
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                @include('partials.nav.menu')

                @include('partials.nav.user')
            </div>
        </div>
    </nav>

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('/js/vendor/bootstrap.js') }}"></script>
</body>
</html>
