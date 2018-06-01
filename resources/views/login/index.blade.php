@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<div class="container home">
  <form action="{{route('site.login.entrar')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Usuario:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="password">Senha:</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
<div>

@endsection
