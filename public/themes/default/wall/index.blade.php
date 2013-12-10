@section('content')

<div class="row">
	<div class="left-panel col-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">Me</div>
		  	<div class="panel-body">
				<div class="col-md-12">
				    <a href="#" class="thumbnail">
				      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
				    </a>
				</div>
					<a class="username clearfix">{{ acl::getUser()->fullName() }}</a>
					
					<a href="{{ route('social_profile_get_edit', acl::getUser()->getId()) }}">
						Edit Profile <span class="glyphicon glyphicon-pencil"></span>
					</a>

		  	</div>
		  	<div class="panel-heading">Menu</div>
		  	<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
				  	<li><a href="#">Wall</a></li>
				  	<li><a href="#">Info</a></li>
				  	<li><a href="#">Photos</a></li>
				  	<li><a href="#">Blog</a></li>
				  	<li><a href="#">Links</a></li>
				</ul>
		  	</div>
		</div>
	</div>

	<div class="col-md-7">
		<div class="form row">
		{{ Form::open(array('route' => 'social_wall_post_post', 'class' => 'form-horizontal', 'role' => 'form')) }}
				<div class="form-group">
					<div class="checkbox pull-left">
					    <label><input type="radio" name="visibility" /> Public</label>
					</div>
					<div class="checkbox pull-left">
					    <label><input type="radio" name="visibility" /> Friends</label>
					</div>
					<div class="checkbox pull-left">
					    <label><input type="radio" name="visibility" /> Private</label>
					</div>
				</div>
				<div class="form-group col-md-11">
			        <input class="form-control" name="post" placeholder="what is on your mind?" />
			    </div>
				
				{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
		</div>

		<div class="posts">
			@foreach ($posts as $post)
			<hr>
			<div class="row post well-sm">
				<div class="col-md-2">
				    <a href="#" class="thumbnail">
				      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
				    </a>
				</div>
				<div class="post col-md-10">
					<a class="username">{{ $post->user->fullName() }}</a>
					<p>{{ $post->body }}</p>

					<div class="well well-sm">
						<div class="panel">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							<small> 3 people like this!</small>
							<small class="pull-right muted">7 minutes ago</small>
						</div>
						<div class="comment-form row">
						{{ Form::open(array('url' => 'foo/bar')) }}
							<div class="col-sm-2">
							    <a href="#" class="thumbnail">
							      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-sm-10">
								<input class="form-control" name="message" />
							</div>
						{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
			<hr>
			@endforeach
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
		  	<div class="panel-heading">Quick Tips</div>
		  	<div class="panel-body">
		    Panel content
		  	</div>
		</div>
		<div class="panel panel-default">
		  	<div class="panel-heading">Recommended Pages</div>
		  	<div class="panel-body">
		    Panel content
		  	</div>
		</div>
	</div>
</div>

@stop