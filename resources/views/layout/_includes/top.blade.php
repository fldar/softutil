<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset("css/style.css")}}">
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("css/mdb.min.css")}}">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Soft-Util</title>

</head>

<body>
  <nav class="navbar navbar-dark default-color justify-content-between navbar-expand-lg">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{route('links')}}">Links</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('links')}}">Uteis</a>
              </li>
          </ul>
          @if(Auth::guest())
            <form class="form-inline my-1">
                <a class="btn btn-outline-white btn-sm my-0" href="{{route('login')}}">Login</a>
            </form>
          @else
            <span class="navbar-text white-text">
                Seja Bem Vindo '{{Auth::user()->name}}'
            </span>
            <form class="form-inline my-1">
                <a class="btn btn-outline-white btn-sm my-0" href="{{route('site.login.sair')}}">Logout</a>
            </form>
          @endif
      </div>
  </nav>
