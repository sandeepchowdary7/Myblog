@extends('master')

@section('content')

      @if($posts->count())

            @foreach($posts as $post)

                  @include('posts.post')

            @endforeach 

            {{ $posts->links() }}

      @else  

            <p>No posts found</p>

      @endif  

@endsection
