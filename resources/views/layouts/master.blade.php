<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Quebec</title>
    <link rel="stylesheet" href="{{ elixir('css/laravel.css') }}">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Basculer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="images/laravel-quebec-logo.svg" alt="Laravel Quebec">
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><span>Discussions</span></a></li>
                    <li><a href="events.html"><span>Événements</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary navbar-btn">Se connecter avec <i class="fa fa-github"></i><span class="sr-only">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="navbar-channels">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="signed.html">Tout</a></li>
                        <li><a href="#">Général</a></li>
                        <li><a href="#">Amélioration du site</a></li>
                        <li><a href="#">Trucs &amp; Astuces</a></li>
                        <li><a href="#">Aide</a></li>
                        <li><a href="#">Anonces</a></li>
                        <li><a href="#">Packages</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-right">
                </div>
            </div>
        </div>
    </section>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <p>
                        Conçu avec <i class="fa fa-heart"></i><span class="sr-only">amour</span>
                        et <a href="http://laravel.com"><i class="la la-laravel"></i><span class="sr-only">Laravel</span></a> par
                        <a href="profile.html">Vincent Talbot</a>.
                        Hébergé avec <a href="https://forge.laravel.com"><i class="la la-forge"></i><span class="sr-only">Forge</span></a> et
                        <a href="https://www.digitalocean.com/?refcode=a3a2a867d4c8"><i class="la la-digitalocean"></i><span class="sr-only">DigitalOcean</span></a>.
                    </p>
                </div>

                <div class="col-md-2 text-right">
                    <p>
                        <a href="https://github.com/laravelquebec" class="btn btn-github btn-default" title="Github"><i class="fa fa-github fa-fw"></i><span class="sr-only">Github</span></a>
                        <a href="https://twitter.com/laravelquebec" class="btn btn-twitter btn-default" title="Twitter"><i class="fa fa-twitter fa-fw"></i><span class="sr-only">Twitter</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add scripts there -->
</body>
</html>
