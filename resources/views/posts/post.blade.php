<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

      <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }}</p>
		        {{ $post->body}}
		  </div>



        </div><!-- /.blog-main -->
</div>
@include('layouts.page-nav')
</main>
