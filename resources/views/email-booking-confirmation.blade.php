{{ App()->setLocale($lang) }}




{{ __('Your reservation information') }}


@if ($type == 'instant')
{{ __('You have made a instant reservation for') }} {{ Carbon\Carbon::now() }}
{{ __('from') }} {{ $origin }} to {{ $destination }}
@elseif ($type == 'reservation')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  desde:      {{ $origin }}
  hasta:      {{ $destination }}
@elseif ($type == 'cruise')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  puerto:        {{ $port }}
@elseif ($type == 'airport')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
  aeropuerto:     {{ $airport }}
@elseif ($type == 'routes')
  fecha de la reserva: {{ Carbon\Carbon::now() }}
  fecha del viaje: {{ $date }} {{ $time }}
@endif


{{ __('Thanks for your Booking!, we will contact you as soon as possible.') }}

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

{{ __('you can visit the next link to delete all your booking information and cancel the booking.') }}