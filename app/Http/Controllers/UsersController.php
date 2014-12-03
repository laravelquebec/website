<?php namespace LaravelQuebec\Http\Controllers;

use Illuminate\Http\Response;
use LaravelQuebec\Http\Requests;
use LaravelQuebec\Http\Requests\UserRequest;
use LaravelQuebec\Repositories\User\UserRepository;
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
	 * @param  User  $user
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  User  $user
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  User  $user
	 * @return Response
	 */
	public function update(User $user, UserRepository $userRepository, UserRequest $request)
	{
		$userRepository->update($user, $request->all());

		return redirect()->route('user.show', [$user->username]);
	}

}
