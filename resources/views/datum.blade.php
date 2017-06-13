@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-1">

            <table class="table table-bordered table-striped table-condensed" >

                    <thead>
                    <tr>
                        <td>Doctor</td>
                        <td>PatNum</td>
                        <td>Finacial Class</td>
                        <td>Chg Code</td>
                        <td>Description</td>
                        <td>DRG</td>
                        <td>Amount</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($results as $result)

                    <tr>
                        <td>{{ $result->AdmDr }}</td>
                        <td>{{ $result->AccountNum }}</td>
                        <td>{{ $result->FC }}</td>
                        <td>{{ $result->ChgCode}}</td>
                        <td>{{ $result->ChgDescription}}</td>
                        <td>{{ $result->DRG}}</td>
                        <td>${{  number_format($result->TxnAmt,2) }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

    </div>
</div>
</div>
<div class="col-md-12 col-md-offset-4">
<?php echo $results->render(); ?>
</div>
@endsection