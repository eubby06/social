@section('content')
<div class="login-form">
	<h1>Sign Up</h1>
	<p>It's free and always will be.</p>

	<ul>
	{{ Form::open() }}
		<li>{{ Form::text('first_name') }}</li>
		<li>{{ Form::text('last_name') }}</li>
		<li>{{ Form::text('email') }}</li>
		<li>{{ Form::text('password') }}</li>
		<li>{{ Form::text('password_confirmation') }}</li>
		<li>{{ Form::radio('gender', 'female') }}</li>
		<li>{{ Form::radio('gender', 'male') }}</li>
		<li>{{ Form::submit('Sign Up') }}</li>
	{{ Form::close() }}
	</ul>
</div>
@stop