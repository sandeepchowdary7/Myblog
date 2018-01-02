@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">
  
    @foreach ($posts as $post)

      @include('posts.post')

    @endforeach

</div>

@endsection