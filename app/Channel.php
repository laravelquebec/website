<?php namespace LaravelQuebec;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property int position
 */
class Channel extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'position'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function discussions()
	{
		return $this->hasMany('Discussion');
	}

}
