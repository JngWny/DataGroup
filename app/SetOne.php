<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetOne extends Model
{
//run queries
    static function enums()
    {
    	SetOne::all();
    }
// set Realtionships
//    public function eventtwos()
//    {
//    	return $this->hasMany('App\SetTwo');
// 		}
}
