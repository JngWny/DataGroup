<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;


class Home extends Model
{
	public static function GetFieldList()
	{
		$cols = Schema::getColumnListing('pat_chgs');
		Return $cols;
	}
}

