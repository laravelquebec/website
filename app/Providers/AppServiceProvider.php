<?php namespace LaravelQuebec\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'LaravelQuebec\Services\Auth\AuthenticateUser',
			'LaravelQuebec\Services\Auth\GithubAuthenticateUser'
		);

		$this->app->bind(
			'LaravelQuebec\Repositories\User\UserRepository',
			'LaravelQuebec\Repositories\User\DbUserRepository'
		);

		$this->app->bind(
			'LaravelQuebec\Repositories\Channel\ChannelRepository',
			'LaravelQuebec\Repositories\Channel\DbChannelRepository'
		);
	}

}
