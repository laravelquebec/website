<?php namespace LaravelQuebec\Http\Controllers;

use LaravelQuebec\Http\Requests;
use LaravelQuebec\Http\Controllers\Controller;

class DiscussionsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'delete']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('discussions.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('discussions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return view('discussions.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		return view('discussions.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
	}

}
