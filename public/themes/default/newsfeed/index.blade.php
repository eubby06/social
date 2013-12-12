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
					<a href="{{ route('social_wall', acl::getUser()->getWallIdentifier()) }}" class="username clearfix">{{ acl::getUser()->fullName() }}</a>
					
					<a href="{{ route('social_wall', acl::getUser()->getWallIdentifier()) }}">
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
		<div class="form clearfix">
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

				<div class="form-group col-md-10">
			        <input class="form-control" name="post" placeholder="what is on your mind?" />
			    </div>

				{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
		</div>

		<div class="posts">
			@foreach ($posts as $post)
			<div class="row post well-sm">
				<div class="col-md-2">
				    <a href="#" class="thumbnail">
				      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
				    </a>
				</div>
				<div class="col-md-10">
					<a class="username">{{ $post->user->fullName() }}</a>
					<p>{{ $post->body }}</p>

					<div class="well well-md clearfix">
						<div class="panel">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							<small> 3 people like this!</small>
							<small class="pull-right text-muted">{{ $post->created_at->diffForHumans() }}</small>
						</div>

						<ul class="list-unstyled comments">
							@foreach ($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
							<li class="comment clearfix">
								<div class="col-md-2">
									<a href="#" class="thumbnail">
									    <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" />
									</a>
								</div>
								<div class="message">
									<p>{{ $comment->body }}<br>
									<small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
								</div>
							</li>
							@endforeach
						</ul>

						<div class="comment-form form">
						{{ Form::open(array('route' => 'social_comment_post_create')) }}
							<div class="col-md-2">
							    <a href="#" class="thumbnail">
							      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-md-8">
								<input class="form-control" name="comment" />
							</div>
							<div class="col-md-2">
								{{ Form::hidden('post_id', $post->id) }}
								{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
							</div>
						{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
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