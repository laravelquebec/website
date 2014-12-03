@extends('layouts.master')

@section('content')
  <section class="profile">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3 profile-user">
  				<picture>
                    <img src="{{ $user->avatar }}&amp;s=263" alt="{{{ $user->username }}}" class="img-rounded">
                </picture>

				{!! Form::model($user, ['method' => 'put', 'route' => ['user.update', $user->username]]) !!}
					<div class="form-group">
						{!! Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder' => 'Nom']) !!}
					</div>

					<h2>@{{{ $user->username }}}</h2>

					<div class="form-group">
						{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Bio']) !!}
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Courriel']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
							{!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Ville']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-link fa-fw"></i></span>
							{!! Form::url('homepage', null, ['class' => 'form-control', 'placeholder' => 'Site web']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
							{!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Compagnie']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('hireable') !!}
								Disponible pour travailler
							</label>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-check fa-fw"></i>
							Enregistrer
						</button>
					</div>
				{!! Form::close() !!}
  			</div>
  		</div>
  	</div>
  </section>
@endsection
