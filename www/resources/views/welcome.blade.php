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
    <div id="contact-info" class="col-span-1 h-140 text-black">
        <h1 class="text-6xl text-center mt-20 font-roboto font-bold">Taxi nº16, Almuñecar</h1>
        <p class="text-2xl text-center pt-3 font-poppins">{{ __('vehicle prepared for traveling with babies, childrem or pets.') }}</p>
        <p class="text-xl text-center pt-3 font-poppins">{{ __('email') }}: info@taxialmunecar16.com.</p>
        <p class="text-xl text-center pt-7 font-poppins">{{ __('telephone') }}: 667033917.</p>

        <div class="flex">
            <div class="block pt-5 mx-auto">
                <a class="block text-center text-2xl font-bold bg-emerald-500 p-3 w-md rounded-xl text-white font-poppins" href="">{{ __('Make your reservation here') }}</a>
            </div>
        </div>
    </div>
    <div class="col-span-1 bg-[url(/img/book-a-taxi-in-granada-2024.jpg)] bg-cover h-140 text-white font-bold">
    </div>


    {{-- ROW 3 --}}
    <div class=" col-span-full bg-[url(/img/002-a-taxi-in-almuñecar-24-hours.jpg)] bg-bottom bg-cover h-140 text-white font-bold">
        <div class="backdrop-blur h-full">
            <h2 class="text-7xl text-center pt-30 text-roboto">{{__('Service 24h')}}</h2>
            <p class="text-2xl font-bold text-center pt-4 text-poppins">{{__('Make your reservation here,')}} <br class="block"> {{__(' for right now or in a few days')}} </p>
            <div class="flex flex-col">
                <div class="block mt-5 mx-auto">
                    <a class="block text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl text-white" href="">{{__('Instant Booking')}}</a>
                </div>
                <div class="block pt-5 mx-auto">
                    <a class="block text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl text-white" href="">{{__('Booking by date')}}</a>
                </div>
            </div>
        </div>
    </div>


    {{-- ROW 4 --}}
    <div class="col-span-1 bg-[url(/img/003-book-a-taxi-to-the-airport-almuñecar.png)] bg-cover h-140 text-white font-bold">
    </div>
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center font-bold pt-20 font-roboto">{{__('Book a taxi to the airport')}}</h1>
        <p class="text-xl text-center pt-7 font-poppins">{{__('If you arrive at Malaga airport and need transportation, please call us.')}}</p>
        <p class="text-xl text-center pt-3 font-poppins">{{__('We are here when you need us with 24-hour availability, all week long.')}}</p>
        <p class="text-xl text-center pt-3 font-poppins">{{__('We make sure tha you and your family get the best care posible.')}}</p>
        <div class="flex">
            <div class="block pt-5 mx-auto">
                <a class="block text-center text-2xl font-bold bg-emerald-500 p-3 w-md rounded-xl text-white font-poppins" href="">{{__('Book Airport Taxi')}}</a>
            </div>
        </div>
    </div>


    {{-- ROW 5 --}}
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center pt-20 font-bold font-roboto">{{__('Book a taxi from your cruise.')}}</h1>
        <p class="text-xl text-center pt-7 font-poppins">{{__('We are here when you need us. If you are travelling on a cruise')}}</p>
        <p class="text-xl text-center pt-2 font-poppins">{{__('we will take you to any port on the Costa Tropical, Almeria or Málaga')}}</p>
        <div class="pt-3">
            <a class="block mt-4 mx-auto bg-emerald-500 p-2 w-md rounded-xl font-poppins font-bold text-white text-center text-2xl " href="">{{__('Book a taxi for your cruise')}}</a>
        </div>
    </div>
    <div class="col-span-1 bg-[url(/img/004-book-a-taxi-for-you-cruises-in-almunecar.png)] bg-cover bg-left-bottom h-140 text-white font-bold">
    </div>


    {{-- ROW 6 --}}
    <div class="pt-6 col-span-full bg-[url(/img/006-taxi-almuñecar-puerta-del-mar.png)] bg-bottom bg-cover text-white">
        <h2 class="drop-shadow-xl text-8xl text-center pt-20 font-roboto  font-bold">{{__('Price Rates')}}</h2>
        <p class="drop-shado-xl pt-2 text-4xl text-center font-poppins">{{__('Check taxi official rates')}}</p>
        <div class="pt-3">
            <a class="block mt-4 mx-auto text-center text-2xl bg-emerald-500 p-2 w-md rounded-xl font-poppins font-bold" href="">{{__('Official Rates')}}</a>
        </div>
        <div class="pt-2">
            <a class="block mt-2 mx-auto text-center text-2xl bg-emerald-500 p-2 w-md rounded-xl font-poppins font-bold" href="">{{__('Rates For Pre-Arranges Reservations')}}</a>
        </div>
    </div>


    {{-- ROW 7 --}}
    <div class="col-span-1 bg-[url(/img/istockphoto-1191221365.jpg)] bg-cover bg-left-bottom h-140 text-white">
    </div>
    <div class="col-span-1 mt-8 text-black">
        <h2 class="text-5xl text-center pt-20 font-roboto font-bold">{{__('Tropical Coast Routes')}}.</h2>
        <p class="text-2xl text-center pt-7 font-poppins">{{__("If you want to discover the best sunsets on the Costa Tropical, don&quote;t hesitate to call us.")}}</p>
        <p class="text-2xl text-center pt-2 font-poppins">{{__('At taxi almunecar 16, we will take care of organizing the best route for your trip.')}}</p>
        <div class="pt-6">
            <a class="block mt-2 mx-auto text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl font-poppins font-bold text-white" href="">{{__('Book a taxi for your routes')}}</a>
        </div>
    </div>


    {{-- ROW 8 --}}
    <div class="col-span-1 font-poppins font-bold">
        <div class="p-10">
            <form id="booking-form" method="post" action="/{{ app()->getLocale() }}/" class="">
                @csrf
                <input name="lang" type="hidden" value="{{ app()->getLocale() }}">

                <span class="text-emerald-500">{{__('Please select one of type of booking')}}</span>
                <select id="booking-type" name="type" class="mb-3 p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white">
                    {{-- <option value="unknown"    disabled selected>{{__('Please select one of type of booking')}}:</option> --}}
                    <option value=""></option>
                    <option value="instant"    >{{__('Almuñecar Instant Booking')}}</option>
                    <option value="reservation">{{__('Booking for a date')}}</option>
                    <option value="airport">    {{__('Airport Booking')}}</option>
                    <option value="cruise">     {{__('Cruise Booking')}}</option>
                    <option value="routes">     {{__('Route by coast')}}</option>
                </select>

                <div id="airport-select-msg" class="hidden text-emerald-500 mt-3">{{__('Please select the airport for your booking')}}</div>
                <select id="airport-select" name="airport" class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white">
                    <option value=""></option>
                    <option value="from-granada">{{__('From Granada Airport')}}</option>
                    <option value="to-granada">{{__('To Granada Airport')}}</option>
                    <option value="from-malaga" >{{__('From Málaga Airport')}}</option>
                    <option value="to-malaga" >{{__('To Málaga Airport')}}</option>
                </select>

                <div id="port-select-msg" class="hidden text-emerald-500 mt-3">{{__('Please select the port for your booking')}}</div>
                <select id="port-select" name="port" class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white">
                    <option value=""></option>
                    <option value="from-motril">{{__('From Motril Port')}}</option>
                    <option value="to-motril">{{__('To Motril Port')}}</option>
                    <option value="from-malaga" >{{__('From Málaga Port')}}</option>
                    <option value="to-malaga" >{{__('To Málaga Port')}}</option>
                </select>

                <div id="data-time-select-msg" class="hidden text-emerald-500 mt-3">{{__('Please select the date and time for your booking')}}</div>
                <input id="date-select" name="date" type="date" class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white " placeholder="{{__('date for booking')}}" >
                <input id="time-select" name="time" type="time" class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white " placeholder="{{__('time for booking')}}" >

                <div id="destinations-select-msg" class="hidden text-emerald-500 mt-3">{{__('Choose the pick-up point and destination')}}</div>
                <input id="journey-start-select" name="origin" type="text"     class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white" placeholder="{{__('taxi pickup location')}}">
                <input id="journey-ends-select" name="destination" type="text" class="hidden p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white" placeholder="{{__('taxi destination')}}">

                <div id="contact-info-msg" class="text-emerald-500 mt-3">{{__('Information to contact you')}}</div>
                <input id="name-select" name="name" class="p-3 w-full bg-emerald-500 placeholder-white text-white" type="text" placeholder="{{__('your name and surname')}}">
                <input id="phone-select" name="phone" class="p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white" type="text" placeholder="{{__('your phone number')}}">
                <input id="email-select" name="email" class="p-3 mt-1 w-full bg-emerald-500 placeholder-white text-white" type="text" placeholder="{{__('your email address')}}">

                <input class="p-3 mt-3 w-full bg-emerald-600 text-white" type="submit" value="{{__('Make your reservation!')}}">
            </form>

        </div>
    </div>
    <div class="col-span-1 bg-[url(/img/fran-fernandez-r9uyVJ7_K6s-unsplash.jpg)] bg-center bg-cover text-white font-bold">
        <h3 class="block text-6xl text-center pt-25 font-roboto">
            {{__('Make your reservation here')}}
        </h3>
        <p class="text-white text-xl text-center font-poppins pt-8 px-15">
            {{__('If you are arriving or going to the airport need transportation, please do not hesitate to call us. We are here whe you need us with 24-hour availability. We make sure that you and your family get bes care posible.')}}
        </p>

    </div>

</div>
@endsection


@section('js')
@endsection