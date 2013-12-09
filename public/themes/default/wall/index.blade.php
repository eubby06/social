@section('content')

<div class="row">
	<div class="left-panel col-md-2">
		<div class="panel panel-default">
			<div class="panel-heading">Me</div>
		  	<div class="panel-body">
				<div class="col-md-12">
				    <a href="#" class="thumbnail">
				      <img data-src="holder.js/100%x180" alt="...">
				    </a>
				</div>
					<a class="username clearfix">Zepy Games</a>
					
					<a>
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
		{{ Form::open(array('url' => 'foo/bar', 'class' => 'form-horizontal', 'role' => 'form')) }}
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
			        <input class="form-control" name="message" placeholder="what is on your mind?" />
			    </div>
				
				{{ Form::submit('submit', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
		</div>

		<div class="posts">
			<hr>
			<div class="row post well-sm">
				<div class="col-md-2">
				    <a href="#" class="thumbnail">
				      <img data-src="holder.js/100%x180" alt="...">
				    </a>
				</div>
				<div class="message col-md-10">
					<a class="username">Zepy Games</a>
					<p>
					Audition party given a great Sunday fun get together to meet and compete for the fans. Some has practice weeks ready for the competition and some just come and enjoy the fun. Asiasoft has done it again to organised yet another fun outing for the Audition fans. And Alienware Arena is proud to be the vanue partner for this fantastic event.
					</p>
					<div class="btn-group btn-group-xs">
					  <button type="button" class="btn btn-default">Like</button>
					  <button type="button" class="btn btn-default">Comment</button>
					  <button type="button" class="btn btn-default">Share</button>
					</div>
					<button type="button" class="btn btn-default btn-xs">
					  <span class="glyphicon glyphicon-thumbs-up"></span><small>3</small>
					</button>
					<small class="pull-right">7 minutes ago</small>
				</div>
			</div>
			<hr>
			<div class="row post well-sm">
				<div class="col-md-2">
				    <a href="#" class="thumbnail">
				      <img data-src="holder.js/100%x180" alt="...">
				    </a>
				</div>
				<div class="message col-md-10">
					<a class="username">Zepy Games</a>
					<p>
					Audition party given a great Sunday fun get together to meet and compete for the fans. Some has practice weeks ready for the competition and some just come and enjoy the fun. Asiasoft has done it again to organised yet another fun outing for the Audition fans. And Alienware Arena is proud to be the vanue partner for this fantastic event.
					</p>
					<div class="btn-group btn-group-xs">
					  <button type="button" class="btn btn-default">Like</button>
					  <button type="button" class="btn btn-default">Comment</button>
					  <button type="button" class="btn btn-default">Share</button>
					</div>
					<button type="button" class="btn btn-default btn-xs">
					  <span class="glyphicon glyphicon-thumbs-up"></span><small>3</small>
					</button>
					<small class="pull-right">7 minutes ago</small>
				</div>
			</div>
			<hr>
			<div class="row post well-sm">
				<div class="col-md-2">
				    <a href="#" class="thumbnail">
				      <img data-src="holder.js/100%x180" alt="...">
				    </a>
				</div>
				<div class="message col-md-10">
					<a class="username">Zepy Games</a>
					<p>
					Audition party given a great Sunday fun get together to meet and compete for the fans. Some has practice weeks ready for the competition and some just come and enjoy the fun. Asiasoft has done it again to organised yet another fun outing for the Audition fans. And Alienware Arena is proud to be the vanue partner for this fantastic event.
					</p>
					<div class="btn-group btn-group-xs">
					  <button type="button" class="btn btn-default">Like</button>
					  <button type="button" class="btn btn-default">Comment</button>
					  <button type="button" class="btn btn-default">Share</button>
					</div>
					<button type="button" class="btn btn-default btn-xs">
					  <span class="glyphicon glyphicon-thumbs-up"></span><small>3</small>
					</button>
					<small class="pull-right">7 minutes ago</small>
				</div>
			</div>
			<hr>
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