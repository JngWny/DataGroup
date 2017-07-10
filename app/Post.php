<?php

namespace App;
use Illuminate\Database\Query;
use Carbon\Carbon;


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


    public function user()
        {
            return $this->belongsTo(User::class);
        }


    static function archives()
        {
         return static::selectRaw('year(created_at) year, monthname(created_at) month , count(*) total')
        ->groupBy('month','year')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
        }




// filter request from sidebar
    public function scopeFilter($query, $filters)
    {
// filter months
        if ($month = request('month'))
        {
            $query
            ->whereMonth('created_at',Carbon::parse($month)
            ->month);
        }
// filter year
         if ($year = request('year'))
        {
            $query
            ->whereYear('created_at',$year);
        }
    }





}
