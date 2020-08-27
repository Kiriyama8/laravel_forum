<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const ACTIVE = 1;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'description'
	];

	public function topics()
	{
		return $this->hasMany(Topic::class)->latest()->limit(5);
	}
}
