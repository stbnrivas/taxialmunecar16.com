{{ App()->setLocale($lang) }}

{{ __('Thanks for your Booking!') }}



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

{{ App()->getLocale() }}

{{ App()->setLocale('de') }}


{{ __('you can visit the next link to delete all your booking information and cancel the booking.') }}