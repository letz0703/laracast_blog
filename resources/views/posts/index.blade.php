@section('content')
	@ foreach ($posts as $post)
	@include('posts.post',compact('post'))
	@endforeach
@endsection
