{{ App()->setLocale($lang) }}

DATOS DE RESERVA

  Idioma del cliente:    {{ $lang }}
  Nueva reserva de tipo: {{ $type }}
@if ($type == 'instant')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  desde:       {{ $origin }}
  hasta: {{ $destination }}
@elseif ($type == 'reservation')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  desde:       {{ $origin }}
  hasta: {{ $destination }}
@elseif ($type == 'cruise')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  port :        {{ $port }}
@elseif ($type == 'airport')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  airport :     {{ $airport }}
@elseif ($type == 'routes')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
@endif

DATOS DE CONTACTO
  nombre:   {{ $name }}
  telefono: {{ $phone }}
  correo:   {{ $email }}

