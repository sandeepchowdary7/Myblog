@extends('master')

@section('content')

<!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{$post->title}}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Sandeep Choudary</a>
                      <!-- Date/Time -->
          <p>Posted on {{ $post->created_at->toFormattedDateString() }}</p>
          </p>

          <hr>

          <form method="POST" action="{{ url ("/post/{$post->id}") }}"> 
                {{ csrf_field() }}

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <!-- Post Content -->
          <p class="lead"><strong>Powered by LARA@Leader</strong></p>

          <hr>

          <p> {{ $post->body }} </p>

        </form>

        <!-- orginal comment sec -->

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <ul class="list-group"> 

      @foreach($post->comments as $comment)

      <li class="list-group-item">

        <strong>

          {{ $comment->created_at->diffForHumans()}} : &nbsp;

        </strong>

        {{ $comment->body }}

      </li>

      @endforeach

    </ul>

            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form method="POST" action="{{ url ("/post/{$post->id}/name") }}"> 
                   {{ csrf_field() }}

            <!-- <h5 class="card-header">Enter Name:</h5> -->
            <div class="form-group">
                  <input type="name" name="name"  class= "form-control" placeholder="Enter Name ...">
                </div>
              <form method="POST" action="{{ url ("/post/{$post->id}/comment") }}"> 
                   {{ csrf_field() }}
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Enter Comment  Here...."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </form>
            </div>
          </div>
 
  </div>

    @endsection
