@extends('master')

@section('content')

<!-- Post Content Column -->
<div class="col-lg-8">

    <div class="col-lg-4">

          <!-- Title -->
          <h2>{{$post->title}}</h2>

       {{ $post->created_at->toFormattedDateString() }}

       <p>{{ str_limit($post->body, 50) }}</p>

       <p><a class="btn btn-primary" href="{{ action('PostController@show', $post) }}" role="button">View details &raquo;</a></p>

    </div>
 
<!--     <div class="col-lg-4">
 -->
        <!-- Title -->
         <!--  <h2>{{$post->title}}</h2>

       {{ $post->created_at->toFormattedDateString() }}

       <p>{{$post->body}} </p>

       <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       
    </div> -->

</div>
  @endsection