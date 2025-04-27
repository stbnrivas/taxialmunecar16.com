@extends('layout.layout')


@section('body')

<div class="grid grid-cols-2 grid-rows-2 gap-0">
    {{-- ROW 1 --}}
    @if($result == 'success')
    <div class="col-span-full bg-emerald-500  mx-auto min-w-full h-120 text-white font-bold pt-15">
        <span class="block text-center text-8xl font-roboto">{{ __('Thanks for your Booking!') }}</span>
        <span class="block text-center text-4xl font-roboto mt-5">{{ __('Please check your email to confirm your booking') }}</span>
        <div class="block pt-15">
            <a href="/{{ app()->getLocale() }}/" class="block mx-auto underline text-center text-2xl font-poppins bg-white text-emerald-500 p-3 w-md rounded-xl">{{ __('return back to index') }}</a>
        </div>
    </div>
    @else
    <div class="col-span-full bg-emerald-500  mx-auto min-w-full h-120 text-white font-bold pt-15">
        <span class="block text-center text-8xl font-roboto">{{ __('Sorry, something was wrong') }}</span>
        <div class="block pt-15">
            <a href="/{{ app()->getLocale() }}/" class="block mx-auto underline text-center text-2xl font-poppins bg-white text-emerald-500 p-3 w-md rounded-xl">{{ __('return back to index') }}</a>
        </div>
    </div>
    @endif

</div>
@endsection


@section('js')
@endsection