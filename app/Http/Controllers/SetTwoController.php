<?php

namespace App\Http\Controllers;

use App\SetTwo;
use App\DataFilters;
use App\QueryFilters;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Excel;


class SetTwoController extends Controller
{


	public function index()
  	{
  		$events = SetTwo::paginate(15);
       	return view('traces.trialindex',compact('events'));
    }
// sort index
  public function indexsort(DataFilters $filters)
    {
      $events = SetTwo::filter($filters)->paginate(29);

    	return view('traces.sortable',compact('events'));
  	}
// export query
  public function export()
    {
      $events = SetTwo::filter($filters)->get();
      Excel::create('Results', function($excel)
        {
          $excel->sheet('data',function($sheet)
          {
            $sheet->loadView('traces.sortable');
          });
        })->download('xls');
    }



}
