<?php

namespace App\Http\Controllers;

use App\PatChg;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Html;

class PatChgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = PatChg::where ('DRG','!=','Na')->paginate(15);

        Return view('datum',['results'=>$results]);

    }
    /**
     * Display a listing of the DrList with mrn count
     *

    distinct  doctors and MRN
        $doctors = PatChg::select('AdmDr','MRN')->groupby('AdmDr','MRN')->paginate(15);

     *
     * @return \Illuminate\Http\Response
     */
    public function drindex()
    {
        //

       // $doctors=select('AdmDr ,count(MRN) as MRN from $doctors0');

        $doctors = PatChg::select('AdmDr','MRN')->count('MRN')->groupby('AdmDr')->paginate(15);

        Return view('doctors',['doctors'=>$doctors]);

    }

    /**
     * Show the form for Drlist.
     *
     * @return partials dr list
     */



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
     * @param  \App\PatChg  $datum
     * @return \Illuminate\Http\Response

$patchgs = PatChg::groupby('AdmDr')
        ->selectraw('sum(TxnAmt)as TxnAmt,AdmDr')
        ->get()
     * return unique data set
     */

    public function dataplus()
    {
        //

        $patchgs = PatChg::groupby('AdmDr')
        ->selectraw('sum(TxnAmt)as TxnAmt,AdmDr')
        ->get()
        ;



        Return view('datumplus',['patchgs'=>$patchgs]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatChg  $datum
     * @return \Illuminate\Http\Response
     */
    public function edit(PatChg $patchg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatChg  $datum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatChg $patchg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatChg  $patchg
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatChg $patchg)
    {
        //
    }
}
