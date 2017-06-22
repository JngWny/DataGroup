<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $cols = Home::GetFieldList();

        Return view('home',['cols'=>$cols]);
    }



}
