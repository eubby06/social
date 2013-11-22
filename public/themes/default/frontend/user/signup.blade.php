@section('content')

<div class="row">
    <div class="col-xs-6 col-xs-offset-6">
    <h1>Sign Up</h1>
    <p>It's free and always will be.</p>

    {{ Form::open(array('route' => 'signup', 'role' => 'form', 'class' => 'form-horizontal')) }}
    
        <div class="form-group">
            <div class="col-xs-12">
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
              <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
            </div>
        </div>

        <div class="form-group">
            <div class="container">
                <div class="col-xs-2">
                    <label> <input type="radio"> Male </label>
                </div>
                <div class="col-xs-2">
                    <label> <input type="radio"> Female </label>
                </div>
            </div>
        </div>

        <p>
        <small class="text-muted">By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</small>
        </p>

        <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default btn-lg col-xs-3">Sign Up</button>
            </div>
        </div>

    {{ Form::close() }}

    </div>
</div>


@stop


