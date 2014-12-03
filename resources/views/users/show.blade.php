@extends('layouts.master')

@section('content')
  <section class="profile">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-4 profile-user">
  				<picture>
  					<img src="{{ $user->avatar }}&amp;s=263" alt="{{{ $user->username }}}" class="img-rounded">
					</picture>

					<h1>{{{ $user->name }}}</h1>
					<h2>@{{{ $user->username }}}</h2>

					@if ($user->description)
						<p>{{{ $user->description }}}</p>
					@endif

					<ul class="fa-ul">
						@if ($user->location)
							<li><i class="fa fa-li fa-map-marker"></i> {{{ $user->location }}}</li>
						@endif
						@if ($user->homepage)
							<li><i class="fa fa-li fa-link"></i> <a href="{{ $user->homepage }}">{{{ $user->present()->homepage }}}</a></li>
						@endif
						@if ($user->company)
							<li><i class="fa fa-li fa-building"></i> {{{ $user->company }}}</li>
						@endif
						@if ($user->hireable)
							<li><i class="fa fa-li fa-exclamation"></i> Disponible pour travailler</li>
						@endif
					</ul>

					@if (Auth::check() && Auth::id() == $user->id)
						<a href="{{ route('user.edit', [$user->username]) }}" class="btn btn-default">
							<i class="fa fa-pencil fa-fw"></i>
							Éditer votre profil
						</a>
					@endif
  			</div>

  			<div class="col-md-8 profile-discussions" role="tabpanel">
  				<ul class="nav nav-tabs" role="tablist">
  					<li role="presentation" class="active"><a href="#author" role="tab" data-toggle="tab">Auteur</a></li>
  					<li role="presentation"><a href="#participation" role="tab" data-toggle="tab">Participation</a></li>
  				</ul>

  				<div class="tab-content">
  					<div role="tabpanel" class="tab-pane active" id="author">
  						<div class="container-fluid">
								<div class="row">
									<div class="col-md-1">
											<img src="https://avatars3.githubusercontent.com/u/1474848?v=3&s=60" alt="vtalbot" class="img-circle">
									</div>

									<div class="col-md-8">
										<h3><a href="discussion.html">Titre de la disussion</a></h3>
										<p class="details">
											<span class="label label-default">Général</span>
											<span class="updated">Mis-à-jour par <a href="profile.html">@vtalbot</a> le 24 novembre à 01:02.</span>
										</p>
									</div>

									<div class="col-md-3 text-right">
										<span class="answered"><i class="fa fa-check fa-fw"></i><span class="sr-only">Répondu</span></span>
										<span class="msg-count"><i class="fa fa-comments fa-fw"></i> 4 <span class="sr-only">messages</span></span>
									</div>
								</div>

								<div class="row">
									<div class="col-md-1">
											<img src="https://avatars3.githubusercontent.com/u/1474848?v=3&s=60" alt="vtalbot" class="img-circle">
									</div>

									<div class="col-md-8">
										<h3><a href="discussion.html">Titre de la disussion</a></h3>
										<p class="details">
											<span class="label label-default">Général</span>
											<span class="updated">Mis-à-jour par <a href="profile.html">@vtalbot</a> le 24 novembre à 01:02.</span>
										</p>
									</div>

									<div class="col-md-3 text-right">
										<span class="answered"><i class="fa fa-check fa-fw"></i><span class="sr-only">Répondu</span></span>
										<span class="msg-count"><i class="fa fa-comments fa-fw"></i> 4 <span class="sr-only">messages</span></span>
									</div>
								</div>
  						</div>
  					</div>

  					<div role="tabpanel" class="tab-pane" id="participation">
  						<div class="container-fluid">
								<div class="row">
									<div class="col-md-1">
											<img src="https://avatars3.githubusercontent.com/u/1474848?v=3&s=60" alt="vtalbot" class="img-circle">
									</div>

									<div class="col-md-8">
										<h3><a href="discussion.html">Titre de la disussion</a></h3>
										<p class="details">
											<span class="label label-default">Général</span>
											<span class="updated">Mis-à-jour par <a href="profile.html">@vtalbot</a> le 24 novembre à 01:02.</span>
										</p>
									</div>

									<div class="col-md-3 text-right">
										<span class="answered"><i class="fa fa-check fa-fw"></i><span class="sr-only">Répondu</span></span>
										<span class="msg-count"><i class="fa fa-comments fa-fw"></i> 4 <span class="sr-only">messages</span></span>
									</div>
								</div>

								<div class="row">
									<div class="col-md-1">
											<img src="https://avatars3.githubusercontent.com/u/1474848?v=3&s=60" alt="vtalbot" class="img-circle">
									</div>

									<div class="col-md-8">
										<h3><a href="discussion.html">Titre de la disussion</a></h3>
										<p class="details">
											<span class="label label-default">Général</span>
											<span class="updated">Mis-à-jour par <a href="profile.html">@vtalbot</a> le 24 novembre à 01:02.</span>
										</p>
									</div>

									<div class="col-md-3 text-right">
										<span class="answered"><i class="fa fa-check fa-fw"></i><span class="sr-only">Répondu</span></span>
										<span class="msg-count"><i class="fa fa-comments fa-fw"></i> 4 <span class="sr-only">messages</span></span>
									</div>
								</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
@endsection
