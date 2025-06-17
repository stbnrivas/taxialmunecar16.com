{{ App()->setLocale($lang) }}

<h1>DATOS DE RESERVA</h1>
  Idioma del cliente:    {{ $lang }} <br>
  Nueva reserva de tipo: {{ $type }} <br>

<p>
@if ($type == 'instant')
  fecha de la reserva: {{ Carbon\Carbon::now() }} <br>
  desde:       {{ $origin }} <br>
  hasta: {{ $destination }} <br>
@elseif ($type == 'reservation')
  fecha de la reserva: {{ Carbon\Carbon::now() }} <br>
  fecha del viaje: {{ $date }} {{ $time }} <br>
  desde:      {{ $origin }} <br>
  hasta:      {{ $destination }} <br>
@elseif ($type == 'cruise')
  fecha de la reserva: {{ Carbon\Carbon::now() }} <br>
  fecha del viaje: {{ $date }} {{ $time }} <br>
  puerto:        {{ $port }} <br>
@elseif ($type == 'airport')
  fecha de la reserva: {{ Carbon\Carbon::now() }} <br>
  fecha del viaje: {{ $date }} {{ $time }} <br>
  aeropuerto:     {{ $airport }} <br>
@elseif ($type == 'routes')
  fecha de la reserva: {{ Carbon\Carbon::now() }} <br>
  fecha del viaje: {{ $date }} {{ $time }} <br>
@endif
</p>



<h2>DATOS DE CONTACTO</h2>
<p>
  nombre:   {{ $name }} <br>
  telefono: {{ $phone }} <br>
  correo:   {{ $email }} <br>
</p>

{{-- BORRAR LA RESERVA --}}


