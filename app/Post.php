<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = ['id', 'user_id'];

	public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}