<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SetTwo extends Model
{
//run query all events
    public static function  events()
    {
    	 $events=SetTwo::all();
    	 return $events;
    }
 // set Realtionships
    //{
    //	return $this->belongsTo('App\SetOne');
    //}

}
