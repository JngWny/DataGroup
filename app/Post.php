<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //comments relationship

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    // add comments

    public function addComment($body)
    {

		$this->comments()->create(compact('body'));


    }



}
