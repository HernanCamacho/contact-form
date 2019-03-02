@extends('layout')


@section('content')
<h3>Mensaje de {{ $message->name }}</h3>
<form class="" action="{{ route('messages.update', $message->id )}}" method="post">
    {!! method_field('PUT') !!}
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {!! csrf_field() !!}
    <label for="name">Nombre: </label>
    <input type="text" name="name" value="{{ $message->name }}" readonly>
    <label for="email">Correo: </label>
    <input type="email" name="email" value="{{ $message->email }}" readonly>
    <label for="email">Teléfono: </label>
    <input type="text" name="phone" value="{{ $message->phone }}" readonly>
    <label for="message">Mensaje: </label>
    <textarea name="message" readonly>
        {{ $message->message}}
    </textarea>
    <br>
    Cuando sea atendido este cliente, favor de marcar la casilla:
    <input type="checkbox" name="attended" value="true">
    {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
    <label for="user_who_attended">Este reporte es atendido por:</label>
    <input type="text" name="user_who_attended" value="{{ $user->name }}" readonly>
    <input type="submit" value="Enviar">
</form>
@stop
