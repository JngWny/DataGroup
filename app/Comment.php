<?php

namespace App;

class Comment extends Model
{
    //relationship each comment has one post

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }



    public function user()
    {
    	return $this->belongsTo(User::class);
    }


}
