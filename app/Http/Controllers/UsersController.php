<?php namespace LaravelQuebec\Http\Controllers;

use LaravelQuebec\Http\Requests;
use LaravelQuebec\Http\Controllers\Controller;

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
	 * @param  string  $username
	 * @return Response
	 */
	public function show($username)
	{
		return view('users.show');
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
