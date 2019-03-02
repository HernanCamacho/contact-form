@extends('layout')

@section('content')
<h3>Formulario aqui</h3>
<form class="" action="{{ route('messages.store') }}" method="post">
    {!! csrf_field() !!}
    <label for="name">Nombre: </label>
    <input type="text" name="name" value="{{old('name')}}">
    <label for="email">Correo Electrónico: </label>
    <input type="email" name="email" value="{{old('email')}}" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
    <label for="phone">Teléfono: </label>
    <input type="text" name="phone" value="{{old('phone')}}" pattern="[0-9]{7,10}">
    <input type="hidden" name="attended" value="false">
    <label for="message">Mensaje: </label>
    <textarea name="message">{{old('message')}}</textarea>
    <!-- {!!$errors->first('message', '<span class="error">:message</span>') !!} -->
    <input type="submit" value="Enviar">
</form>
@stop
