@extends('layout.layout')


@section('body')

<div class="grid grid-cols-2 grid-rows-2 gap-0">
    {{-- ROW 1 --}}
    <div class="col-span-full bg-[url(/img/001-a-taxi-in-almuñecar.png)] bg-cover mx-auto min-w-full h-140 text-white font-bold pt-15">
        <span class="block text-center text-8xl font-roboto">{{ __('Thanks for your Booking!') }}</span>
        <span class="block text-center text-4xl font-roboto mt-5">{{ __('We need that you visit your email to confirm') }}</span>
        <div class="block pt-15">
            <a href="/{{ app()->getLocale() }}/" class="block mx-auto text-center text-2xl font-poppins bg-emerald-500 p-3 w-md rounded-xl">{{ __('return back to index') }}</a>
        </div>
    </div>
</div>
@endsection


@section('js')
@endsection