<?php namespace LaravelQuebec\Http\Controllers;

use Illuminate\Http\Response;
use LaravelQuebec\Http\Requests;
use LaravelQuebec\User;

class UsersController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => ['edit', 'update']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  User  $username
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $username
	 * @return Response
	 */
	public function edit($username)
	{
		return view('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $username
	 * @return Response
	 */
	public function update($username)
	{
		//
	}

}
