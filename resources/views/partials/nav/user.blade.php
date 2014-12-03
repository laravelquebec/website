<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li>
            <a href="{{ route('login') }}" class="btn btn-primary navbar-btn">Se connecter avec <i class="fa fa-github"></i><span class="sr-only">Github</span></a>
        </li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ Auth::user()->avatar }}&amp;s=40" alt="{{ Auth::user()->username }}" class="img-circle"> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('user.show', [Auth::user()->username]) }}"><i class="fa fa-user fa-fw"></i> Profil</a></li>
                <li><a href="settings.html"><i class="fa fa-cog fa-fw"></i> Réglages</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a></li>
            </ul>
        </li>
    @endif
</ul>
