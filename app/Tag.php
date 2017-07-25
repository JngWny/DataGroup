<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

	protected $fillable=['name'];

    // get the articles for a given tag
    // relationship tag has many post
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
