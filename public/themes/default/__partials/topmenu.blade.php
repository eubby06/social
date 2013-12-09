@if (! acl::check())

        <div class="navbar-header">
          <a class="navbar-brand" href="#">FlashBook</a>
        </div>

        <div class="navbar-collapse collapse">
                   {{ Form::open(array('route' => 'social_post_login', 'role' => 'form', 'class' => 'navbar-form navbar-right')) }}
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

      <div class="navbar-header">
          <a class="navbar-brand" href="#">FlashBook</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
          </ul>
      </div>

      <div class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
              <li><a href="{{ route('social_logout') }}">Log Out</a></li>
          </ul>
      </div>

@endif