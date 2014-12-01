<?php namespace LaravelQuebec;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * @property string username
 * @property string name
 * @property string email
 * @property string location
 * @property string avatar
 * @property string description
 * @property boolean available
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'name', 'email', 'location', 'available', 'avatar', 'description'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function roles()
	{
		return $this->belongsToMany('Role');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function messages()
	{
		return $this->hasMany('Message');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function discussions()
	{
		return $this->hasMany('Discussion');
	}

}
