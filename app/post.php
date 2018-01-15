<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

 public $timestamps = TRUE;
 protected $table = 'posts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'body'
	];

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

}
