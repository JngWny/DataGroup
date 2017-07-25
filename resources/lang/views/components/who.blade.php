@if(Auth::guard('web')->check())
<p class="success">
	You are loggged in as as a <strong>USER</strong>
</p>

@else
<p class="danger">
	You are logged out as as a <strong>USER</strong>
</p>
@endif


@if(Auth::guard('admin')->check())
<p class="success">
	You are loggged in as as a <strong>ADMIN</strong>
</p>

@else
<p class="danger">
	You are logged out as as a <strong>ADMIN</strong>
</p>
@endif

