@extends('layout')

@section('content')
  <h1>Login</h1>
  <form class="" action="/login" method="POST">
      {!! csrf_field() !!}
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Contraseña">
      <input type="submit" value="Entrar">
  </form>
@stop
