<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\PostFormRequest;
use App\SetOne;
use App\SetTwo;

class SetTwoController extends Controller
{

    //
    public function index()
    {

        $events = SetTwo::paginate(15);

        return view('traces.trialindex',compact('events'))
        ;

    }
}
