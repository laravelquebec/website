<?php namespace LaravelQuebec\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use LaravelQuebec\Http\Requests;
use LaravelQuebec\Services\Auth\AuthenticateUser;

class AuthController extends Controller {

	/**
	 * @param  AuthenticateUser $authenticateUser
	 * @param  Request $request
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
	public function login(AuthenticateUser $authenticateUser, Request $request)
	{
		return $authenticateUser->execute($request->has('code'));
	}

	/**
	 * @param  Guard $auth
	 * @return \Illuminate\Http\RedirectResponse
     */
	public function logout(Guard $auth)
	{
		$auth->logout();

		return redirect()->route('home');
	}

}
