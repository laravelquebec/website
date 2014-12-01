@if (Auth::guest())
    <li>
        <a href="{{ route('login') }}" class="btn btn-primary navbar-btn">Se connecter avec <i class="fa fa-github"></i><span class="sr-only">Github</span></a>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="img-circle"> {{ $user->name }} <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('user.show', [$user->username]) }}"><i class="fa fa-user fa-fw"></i> Profil</a></li>
            <li><a href="settings.html"><i class="fa fa-cog fa-fw"></i> Réglages</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a></li>
        </ul>
    </li>
@endif
