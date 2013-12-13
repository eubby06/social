@section('content')
 @include('social.theme::default.wall.template')
<div class="row wall -wall-wrapper">
	<div class="left-panel col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading"><h4>{{ acl::getUser()->fullName() }}</h4></div>
		  	<div class="panel-body">
				<div class="col-md-12">
				    <a href="#" class="thumbnail">
				      <img src="{{ social_theme_asset('images/avatars/7.jpg') }}" alt="...">
				    </a>
				</div>
		  	</div>
		  	<div class="panel-heading">About</div>
		  	<div class="panel-body -profile-work">
		  		<span class="glyphicon glyphicon-briefcase"></span> 
				<span class="text-muted">Worked at</span> 
				{{ acl::getUser()->profile()->where('type_name','=','work')->first()->description }}
				<a class="-edit-icon" href=""><span class="glyphicon glyphicon-edit pull-right"></span></a> 
				{{ Form::open(array('route' => array('social_profile_post_update', 'work'), 'class' => '-form')) }}
					
					{{ Form::text('work', '', array(
												'class' => 'form-control', 
												'placeholder' => 'worked at')) }}
					{{ Form::submit('update', array('class' => 'btn btn-primary')) }}
					
				{{ Form::close() }}
			</div>
			<div class="panel-body">
				<span class="glyphicon glyphicon-sort-by-alphabet"></span> 
				<span class="text-muted">Studied at</span> 
				{{ acl::getUser()->profile()->where('type_name','=','education')->first()->description }}
				<a class="-edit-icon" href=""><span class="glyphicon glyphicon-edit pull-right"></span></a> 
				{{ Form::open(array('route' => array('social_profile_post_update', 'education'), 'class' => '-form')) }}
					
					{{ Form::text('education', '', array(
												'class' => 'form-control', 
												'placeholder' => 'studied at')) }}
					{{ Form::submit('update', array('class' => 'btn btn-primary')) }}
					
				{{ Form::close() }}
			</div>
			<div class="panel-body">
				<span class="glyphicon glyphicon-home"></span> 
				<span class="text-muted">Lives in</span> 
				{{ acl::getUser()->profile()->where('type_name','=','address')->first()->description }}
				<a class="-edit-icon" href=""><span class="glyphicon glyphicon-edit pull-right"></span></a> 
				{{ Form::open(array('route' => array('social_profile_post_update', 'address'), 'class' => '-form')) }}
					
					{{ Form::text('address', '', array(
												'class' => 'form-control', 
												'placeholder' => 'address')) }}
					{{ Form::submit('update', array('class' => 'btn btn-primary')) }}
					
				{{ Form::close() }}
			</div>
			<div class="panel-body">
				 <span class="glyphicon glyphicon-heart-empty"></span> 
				 {{ acl::getUser()->profile()->where('type_name','=','status')->first()->description }}
				 <a class="-edit-icon" href=""><span class="glyphicon glyphicon-edit pull-right"></span></a> 
				 {{ Form::open(array('route' => array('social_profile_post_update', 'status'), 'class' => '-form')) }}
					
					{{ Form::text('status', '', array(
												'class' => 'form-control', 
												'placeholder' => 'status')) }}
					{{ Form::submit('update', array('class' => 'btn btn-primary')) }}
					
				{{ Form::close() }}
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
</div>

@stop