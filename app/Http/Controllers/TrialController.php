<?php

namespace App\Http\Controllers;

use App\Trial;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // top 8 trials
        $trials = Trial::GetTrials();
        return view('traces.trialindex',['trials'=>$trials]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trial  $trials
     * @return \Illuminate\Http\Response
     */
    public function show(Trial $trials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trials  $trials
     * @return \Illuminate\Http\Response
     */
    public function edit(Trial $trials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trials  $trials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trial $trials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trials  $trials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trial $trials)
    {
        //
    }
}
