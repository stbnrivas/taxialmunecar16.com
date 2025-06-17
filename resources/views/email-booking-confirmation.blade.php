{{ App()->setLocale($lang) }}

<h1>{{ __('Your reservation information') }}</h1>

<p>
@if ($type == 'instant')
{{ __('You have made a instant reservation for') }} {{ Carbon\Carbon::now() }}
{{ __('from') }} {{ $origin }} {{ __('to') }} {{ $destination }}
@elseif ($type == 'reservation')
  {{ __('booking date')}}:   {{ Carbon\Carbon::now() }} <br>
  {{ __('travel date')}}:    {{ $date }} {{ $time }} <br>
  {{ __('from') }}:          {{ $origin }} <br>
  {{ __('to') }}:            {{ $destination }} <br>
@elseif ($type == 'cruise')
  {{ __('booking date')}}:    {{ Carbon\Carbon::now() }} <br>
  {{ __('travel date')}}:     {{ $date }} {{ $time }} <br>
  {{ __('Cruise Booking"')}}: {{ $port }} <br>
@elseif ($type == 'airport')
  {{ __('booking date')}}:      {{ Carbon\Carbon::now() }} <br>
  {{ __('travel date')}}:       {{ $date }} {{ $time }} <br>
  {{ __('Airport Booking"')}}:  {{ $airport }} <br>
@elseif ($type == 'routes')
  {{ __('booking date')}}:   {{ Carbon\Carbon::now() }} <br>
  {{ __('travel date')}}:    {{ $date }} {{ $time }} <br>
@endif
</p>

<p>
{{ __('Thanks for your Booking!, we will contact you as soon as possible.') }}  <br>
</p>

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