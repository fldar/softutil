<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("css/style.css")}}">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Home</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-margin">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{route('links')}}">Links<span class="sr-only">(current)</span></a>
        @if(Auth::guest())
          <a class="nav-item nav-link active" href="{{route('login')}}">Login<span class="sr-only">(current)</span></a>
        @else
          <a class="nav-item nav-link active" href="#">{{Auth::user()->name}}<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="{{route('site.login.sair')}}">Sair<span class="sr-only">(current)</span></a>
        @endif
      </div>
    </div>
  </nav>
