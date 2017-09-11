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
      $events = SetTwo::filter($filters)->paginate(29);

    	return view('traces.sortable',compact('events'));
  	}

    public function export(DataFilters $filters)
    {
      $events = SetTwo::filter($filters)->get();

      \Excel::create('Results',function($excel) use ($events) {
        $excel ->sheet('ExportFile', function($sheet) use ($events) {
          $sheet->fromArray($events);
        });
      })->export('xlsx');
    }

}
