<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PatChg extends Model
{
// only show records with a drg
    public static function CleanDrgOnly()
    {
    	$cleanresults=PatChg::where ('DRG','!=','Na');
    	Return $cleanresults;
    }
// totals chgs by doctor
    public static function TotalChgsbyDr()
    {
    	$patchgs = PatChg::groupby('AdmDr')
        ->selectraw('sum(TxnAmt)as TxnAmt,AdmDr')
        ->get()
        ;
        Return $patchgs;
    }
// Drs unique patient count
    public static function UniqueMrnCount()
    {
    	$uniquemrn = PatChg::groupby('AdmDr')
        ->selectraw('count(distinct MRN) as MRN,AdmDr')
        ->get()
        ;
        Return $uniquemrn;
    }



}
