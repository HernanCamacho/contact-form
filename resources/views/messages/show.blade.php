<h3>Mensaje de {{$message->name}}</h3>
<h4>Datos de contacto:</h4>
<p>Teléfono: {{$message->phone}}</p>
<p>Email: {{$message->email}}</p>
<p>Mensaje: {{$message->message}}</p>
@if(($message->attended) == 'false')
    <p>En espera</p>
@elseif(($message->attended) == 'true')
    <p>Atendido</p>
@endif
