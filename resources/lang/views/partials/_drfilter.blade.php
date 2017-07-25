
<table class="table table-bordered table-striped table-condensed" >
    <thead>
        <th><h4> Filter? </th>
        <th>Soon!</h4></th>
        <tr>
            <td>Doctor</td>
            <td>Include</td>
        </tr>
    </thead>

	<tbody class="dr">
        @foreach ($patchgs as $drnum)
            <tr>
                <td>{{ $drnum->AdmDr }}</td>
                <td>{{Form::radio('Include','value','true')}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
