{{ App()->setLocale($lang) }}

{{ __('Your reservation information') }} </br>

@if ($type == 'instant')
{{ __('You have made a instant reservation for') }} {{ Carbon\Carbon::now() }}
{{ __('from') }} {{ $origin }} to {{ $destination }}
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


{{ __('Thanks for your Booking!, we will contact you as soon as possible.') }}  </br>

{{--
lang :        {{ $lang }}
type :        {{ $type }}
airport :     {{ $airport }}
port :        {{ $port }}
date :        {{ $date }}
time :        {{ $time }}
origin :      {{ $origin }}
destination : {{ $destination }}
code :        {{ $email_confirmation_code }}


name: {{ $name }}
phone : {{ $phone }}
email : {{ $email }}
--}}

{{-- __('you can visit the next link to delete all your booking information and cancel the booking.') --}}