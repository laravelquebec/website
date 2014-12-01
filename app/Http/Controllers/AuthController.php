<?php namespace LaravelQuebec\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use LaravelQuebec\Http\Requests;
use LaravelQuebec\Http\Controllers\Controller;

class AuthController extends Controller {

	public function login(Request $request)
	{

	}

	public function logout(Guard $auth)
	{
		$auth->logout();

		return redirect()->route('home');
	}

}
