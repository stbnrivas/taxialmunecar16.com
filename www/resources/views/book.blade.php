@extends('layout.layout')


@section('body')

<div class="grid grid-cols-2 grid-rows-7 gap-0">
    {{-- ROW 1 --}}
    <div class="col-span-full bg-[url(/img/001-a-taxi-in-almuñecar.png)] bg-cover mx-auto min-w-full h-140 text-white font-bold pt-15">
        <span class="block text-center text-8xl font-roboto">{{ __('Taxi?') }}</span>
        <span class="block text-center text-8xl font-roboto">{{ __('We take you to your destination') }}</span>
        <div class="block pt-15">
            <a href="#contact-info" class="block mx-auto text-center text-2xl font-poppins bg-emerald-500 p-3 w-md rounded-xl">{{ __('Make your reservation here') }}</a>
        </div>
    </div>
    {{-- ROW 2 --}}
    <div class="col-span-full bg-[url(/img/001-a-taxi-in-almuñecar.png)] bg-cover mx-auto min-w-full h-140 text-white font-bold pt-15">
    @if(Session::has('errors'))
        {{--  (Session::get('errors') --}}
    @endif
    </div>
</div>
@endsection


@section('js')
@endsection