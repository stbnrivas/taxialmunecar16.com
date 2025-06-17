{{ App()->setLocale($lang) }}

DATOS DE RESERVA </br>

  Idioma del cliente:    {{ $lang }} </br>
  Nueva reserva de tipo: {{ $type }} </br>
@if ($type == 'instant')
  fecha de la reserva: {{ Carbon\Carbon::now() }} </br>
  desde:       {{ $origin }} </br>
  hasta: {{ $destination }} </br>
@elseif ($type == 'reservation')
  fecha de la reserva: {{ Carbon\Carbon::now() }} </br>
  fecha del viaje: {{ $date }} {{ $time }} </br>
  desde:      {{ $origin }} </br>
  hasta:      {{ $destination }} </br>
@elseif ($type == 'cruise')
  fecha de la reserva: {{ Carbon\Carbon::now() }} </br>
  fecha del viaje: {{ $date }} {{ $time }} </br>
  puerto:        {{ $port }} </br>
@elseif ($type == 'airport')
  fecha de la reserva: {{ Carbon\Carbon::now() }} </br>
  fecha del viaje: {{ $date }} {{ $time }} </br>
  aeropuerto:     {{ $airport }} </br>
@elseif ($type == 'routes')
  fecha de la reserva: {{ Carbon\Carbon::now() }} </br>
  fecha del viaje: {{ $date }} {{ $time }} </br>
@endif

DATOS DE CONTACTO
  nombre:   {{ $name }}
  telefono: {{ $phone }}
  correo:   {{ $email }}

{{-- BORRAR LA RESERVA --}}


