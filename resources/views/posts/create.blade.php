@extends ('layout')

@section ('content')
<div class="container">
	<hr>
	<form method="post" action="/posts">
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
@endsection
