<?php namespace LaravelQuebec;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string text
 * @property string source
 * @property boolean answer
 * @property \LaravelQuebec\User user
 * @property \LaravelQuebec\Discussion discussion
 */
class Message extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['text', 'source', 'answer', 'user_id', 'discussion_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function user()
	{
		return $this->belongsTo('LaravelQuebec\User');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function discussion()
	{
		return $this->belongsTo('LaravelQuebec\Discussion');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function votes()
	{
		return $this->belongsToMany('User', 'votes', 'message_id', 'user_id');
	}

}
