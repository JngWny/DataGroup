<!-- /.blog-sidebar -->
  <div class="blog-sidebar">
  <a href ="{{route('PostCreate')}}" class ="btn btn-primary">Add a Post</a>
    <div class="sidebar-module sidebar-module-inset">
      <h2>Why add a post? </h2>
      <Strong><p>This product is evolving! You can make it better by sharing your insights. Clarity and relevance are the goals we strive for every day.</p>
      <em><p> Thank you!</p></em></Strong>
    </div>
    <div class="sidebar-module sidebar-module-inset">
      <h4>Historical Comments and Request</h4>
    </div>

    <div class="sidebar-module">
      <h4>Archives</h4>
      @foreach($archives as $stats)
        <li>
          <a href={{route('PostList')}}?month={{ $stats['month'] }}&{{ $stats['year']}}>
          {{$stats['month'].' '.$stats['year']}}</a>
        </li>
      @endforeach
    </div>

    <div class="sidebar-module">
      <h4>Tags</h4>
        <ol class="list-unstyled tag-list">

          @foreach($tags as $tag)
            <li>
              <a href="tags/{{$tag}}">{{$tag}}</a>
            </li>
          @endforeach
        </ol>

    </div>
  </div>
<!-- /.blog-sidebar -->
