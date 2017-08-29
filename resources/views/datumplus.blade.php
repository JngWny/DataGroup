@extends('layouts.app')

@section('content')
<h1 class="text-center">Doctors Total Amounts</h1>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-striped table-condensed" >
            <thead>
                <tr>
                    <td>Doctor</td>
                    <td>Amount</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($patchgs as $result)
                    <tr>
                        <td class="text-center">{{ $result->AdmDr }}</td>
                         <td class="text-right">${{ number_format($result->TxnAmt,2)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection