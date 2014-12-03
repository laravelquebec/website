<?php namespace LaravelQuebec\Http\Requests;

use Illuminate\Contracts\Auth\Guard;

class UserRequest extends Request {

	/**
	 * @var Guard
	 */
	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
		    'email' => 'required|email',
		    'location' => '',
		    'company' => '',
		    'hireable' => 'boolean',
		    'homepage' => 'url',
		    'description' => '',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return $this->user->id == $this->auth->user()->id;
	}

}
