@extends('master')

@section('content')

<form method="POST" action="{{ url("posts")}}">

	{{ csrf_field() }}

	<div class="form-group">

		<label for="exampleInputEmail1">Title</label>

		<input type="text" class="form-control form-title" placeholder="Enter Title" name='title'>

	</div>

	<div class="form-group">

		<label for="exampleInputPassword1">Body</label>

		<textarea name="body" placeholder="Enter Content here.." class="form-control form-body"> </textarea>

	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary">Publish</button>

	</div>

	@include ('partials.errors')

</form>

@endsection

<style type="text/css" media="screen">

.form-group {

    padding-left: 50px;
    width: 750px;
}

.form-title {

	height: 50px;
}

.form-body {

	height:390px;
}
	
</style>