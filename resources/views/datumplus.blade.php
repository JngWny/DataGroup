@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-1">
    @include('partials._drfilter')
    </div>



        <div class="col-md-6 col-md-offset-2">

            <table class="table table-bordered table-striped table-condensed" >

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
</div>


@endsection