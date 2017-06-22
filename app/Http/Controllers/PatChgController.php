<?php

namespace App\Http\Controllers;

use App\PatChg;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Html;


class PatChgController extends Controller
{

/*
     * Fixauthentication of the resource.
 */
public function __construct()
    {
        $this->middleware('auth');
    }

/*
     * Display a listing  Clean listing charges having a DRG
 */
public function index()
    {
        //
        $results = PatChg::CleanDrgOnly()->paginate(15);
        Return view('datum',['results'=>$results]);
    }
/*
     * Display a listing  Clean listing charges totaled by Dr
 */

public function drtotals()
    {
        $patchgs = PatChg::TotalChgsbyDr();
        Return view('datumplus',['patchgs'=>$patchgs]);
    }
/*
     * Display a listing of Drs count Uniqe MRN
 */
public function drindex()
    {
        $doctors = PatChg::UniqueMrnCount();
        Return view('doctors',['doctors'=>$doctors]);
    }




}
