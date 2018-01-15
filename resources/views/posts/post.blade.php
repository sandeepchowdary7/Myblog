<article>

    <div class="col-lg-9">

          <!-- Title -->
          <h2>{{$post->title}}</h2>

       on {{ $post->created_at->toFormattedDateString() }}  by <a href="#"> Choudary</a>

       <hr>

       <p>{{ str_limit($post->body, 100) }}</p>

       <p><a class="btn btn-primary" href="{{ action('PostController@show', $post) }}" role="button">Read More &raquo;</a></p>

	</div>

</article>
