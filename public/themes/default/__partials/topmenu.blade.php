@if (! acl::check())

 <div class="navbar-collapse collapse">
           {{ Form::open(array('route' => 'post_login', 'role' => 'form', 'class' => 'navbar-form navbar-right')) }}
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
</div>

@else

<div class="navbar-collapse collapse pull-right">
 	<ul class="nav navbar-nav">
        <li><a href="#">Log Out</a></li>
    </ul>
</div>

@endif