@extends('layout')

@section('content')

<h3>Mensajes: </h3>


<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Número de teléfono</th>
            <th>Mensaje</th>
            <th>Estado del mensaje</th>
            <th>Atendido por: </th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>
                <a href="{{ route('messages.show', $message->id)}}">
                    {{ $message->name }}
                </a>
            </td>
            <td>{{$message->email}}</td>
            <td>{{$message->phone}}</td>
            <td>{{$message->message}}</td>
            @if(($message->attended) == 'false')
                <td>En espera</td>
                <td>No atendido aún</td>
            @elseif(($message->attended) == 'true')
                <td>Atendido</td>
                <td>{{ $user->name }}</td>
            @endif

        </tr>
        @endforeach
    </tbody>
</table>

@stop
