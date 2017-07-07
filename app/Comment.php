<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //relationship each comment has one post

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    protected $fillable = ['body',];


}
