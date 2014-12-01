<?php namespace LaravelQuebec;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string code
 * @property string description
 */
class Role extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'code', 'description'];

}
