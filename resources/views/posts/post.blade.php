          <div class="blog-post">
            <a href="/post/{{ $post->id }}">
	            <h2 class="blog-post-title">{{ $post->title}}</h2>
            </a>
            <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>

            <p>
              {{ $post->body}}
            </p>
          </div><!-- /.blog-post -->




