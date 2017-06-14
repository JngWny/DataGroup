<ul>
<table class="table table-bordered table-striped table-condensed" >
    <thead>
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
