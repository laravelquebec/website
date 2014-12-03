<section class="navbar-channels">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-pills">
                    <li {!! !$currentChannel->slug ? ' class="active"' : '' !!}><a href="{{ route('home') }}">Tout</a></li>
                    @foreach ($channels as $channel)
                        @if ($channel->slug != $currentChannel->slug)
                            <li><a href="{{ route('channel', [$channel->slug]) }}">{{ $channel->title }}</a></li>
                        @else
                            <li class="active"><a href="{{ route('channel', [$channel->slug]) }}">{{{ $channel->title }}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3 text-right">
                @if (Auth::check())
                    <button class="btn btn-primary" data-toggle="modal" data-target="#new-conversation">
                        <i class="fa fa-comment fa-fw"></i>
                        Nouvelle discussion
                    </button>
                @endif
            </div>
        </div>
    </div>
</section>
