<?php

namespace App\Http\Controllers;

use App\SetTwo;
use App\DataFilters;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SetTwoController extends Controller
{


	public function index()
  	{
  		$events = SetTwo::paginate(15);
       	return view('traces.trialindex',compact('events'));

    }

  public function indexsort(DataFilters $filters)
    {
      $events=SetTwo::filter($filters)->get();

    	return view('traces.sortable',compact('events'));
  	}



}
