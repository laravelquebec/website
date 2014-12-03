@extends('layouts.master')

@section('content')
    @include('partials.channels')

    @if ($currentChannel)
        <div class="container">{{ $currentChannel->title }}</div>
    @endif
@endsection
