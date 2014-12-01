<?php namespace LaravelQuebec;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property \LaravelQuebec\Channel channel
 * @property \LaravelQuebec\User user
 * @property \LaravelQuebec\Message message
 */
class Discussion extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'channel_id', 'user_id', 'message_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function messages()
	{
		return $this->hasMany('Message');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function channel()
	{
		return $this->belongsTo('Channel');
	}

}
