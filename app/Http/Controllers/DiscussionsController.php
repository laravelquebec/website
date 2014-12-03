<?php namespace LaravelQuebec\Http\Controllers;

use Illuminate\Http\Response;
use LaravelQuebec\Channel;
use LaravelQuebec\Http\Requests;
use LaravelQuebec\Repositories\Channel\ChannelRepository;

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
	public function index(Channel $channel = null, ChannelRepository $channelRepository)
	{
		$channels = $channelRepository->getAll();

		return view('discussions.index')->with('currentChannel', $channel)->with('channels', $channels);
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
