<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    //
    public static function GetTrials()
    {
	    $trials = Trial::all();
	    Return $trials;
	}
	public static function EventNumbers()
	{
		$enums = Trial::distinct()->select('EventNum');
		Return $enums;
	}



}
