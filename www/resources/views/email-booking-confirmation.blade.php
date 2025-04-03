this is a email blade template

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

{{ __('From Granada Airport') }}
{{ __('Book Cruises Taxi') }}