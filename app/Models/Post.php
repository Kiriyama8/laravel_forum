<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'post', 'topic_id', 'user_id'
	];

	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
