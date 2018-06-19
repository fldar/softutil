@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

@include('login.login-style')

<div class="login-page">
  <div class="form">
    <form class="login-form" action="{{route('site.login.entrar')}}" method="post">
      @csrf
      <input type="text" placeholder="username" id="name" name="name"/>
      <input type="password" placeholder="password" id="password" name="password"/>
      <button type="submit">login</button>
      <p class="message">desenvolvido por <a href="#">Almeida</a></p>
    </form>
  </div>
</div>

@include('login.login-js')

@endsection
