@extends ('layout')

@section ('content')
<div class="container">
	<div class="form-group">
		<form method="post" action="/posts">
		  {{ csrf_field() }}
		  <div class="form-group">
		    <label for="Title">Title</label>
		    <input type="text" class="form-control" id="title" name="title">
		  </div>
		  <div class="form-group">
		    <label for="body">body</label>
		    <textarea id="body" name="body" class="form-control"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Publish</button>
		</form>
	</div>
</div>
@if (count($errors->all()))
<div class="form-group">
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif
@endsection
