<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
   public $timestamps = TRUE;
 protected $table = 'comments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'body',
		'post_id'
	];

	public function post()
	{
		return $this->belongsTo(post::class);
	}
}
