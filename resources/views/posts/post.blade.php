<div class="blog-post">
    <h2 class="blog-post-title">
      {{ $post->id }}
      <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
      </a>
    </h2>

    <p class="blog-post-meta">
    	<strong>{{ $post->user->name}}</strong> on
      {{$post->created_at->toDayDateTimeString() }}
    </p>


    {{ $post->body }}

</div><!-- /.blog-post -->