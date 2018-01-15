<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LARA@Leader-Sandeep Choudary</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/blog-post.css" rel="stylesheet">

  </head>

  <body style="background-color: #e9ecef;">

    @include('partials.nav')

    @include('partials.jumbotron')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        @yield('content')

      </div>
      <!-- /.row -->

       @include('partials.sidebar')
      
    </div>
    <!-- /.container -->

    @include('partials.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  </body>

<style type="text/css">

  .pagination {
    margin-bottom: 20px;
    padding-right: 500px;
    width: 300px;
    height: 23px;
    font-size: 25px;
    color: red;
    padding-left: 500px;
 }
    
  </style>

</html>
