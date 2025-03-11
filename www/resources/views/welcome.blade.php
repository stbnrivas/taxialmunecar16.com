@extends('layout.layout')


@section('body')

<div class="grid grid-cols-2 grid-rows-8 gap-0">
    {{-- ROW 1 --}}
    <div class="col-span-full bg-[url(/img/001-a-taxi-in-almuñecar.png)] bg-cover mx-auto min-w-full h-140 text-white font-bold pt-15">
            <span class="block text-center text-8xl font-roboto">Taxi?</span>
            <span class="block text-center text-8xl font-roboto">We take you to your destination</span>
            <div class="block pt-15">
                <a class="block mx-auto text-center text-2xl font-poppins bg-emerald-500 p-3 w-md rounded-xl" href="">Make your reservation here</a>
            </div>
    </div>


    {{-- ROW 2 --}}
    <div class="col-span-1 h-140 text-black">
        <h1 class="text-center mt-20 text-6xl font-roboto font-bold">Taxi nº16, Almuñecar</h1>
        <p class="text-xl text-center pt-7 font-poppins">telefono: 667033917.</p>
        <p class="text-xl text-center pt-3 font-poppins">mail: info@taxialmunecar16.com.</p>
        <p class="text-xl text-center pt-3 font-poppins"></p>
        <p class="text-xl text-center pt-3 font-poppins">vehiculo preparado para viajes con bebés, niños o mascotas.</p>
        <div class="flex">
            <div class="block pt-5 mx-auto">
                <a class="block text-center text-2xl font-bold bg-emerald-500 p-3 w-md rounded-xl text-white font-poppins" href="">Book Airport Taxi</a>
            </div>
        </div>
    </div>
    <div class="col-span-1 bg-[url(/img/book-a-taxi-in-granada-2024.jpg)] bg-cover h-140 text-white font-bold">
    </div>


    {{-- ROW 3 --}}
    <div class=" col-span-full bg-[url(/img/002-a-taxi-in-almuñecar-24-hours.jpg)] bg-bottom bg-cover h-140 text-white font-bold">
        <div class="backdrop-blur h-full">
            <h2 class="text-7xl text-center pt-30 text-roboto">Service 24h</h2>
            <p class="text-2xl font-bold text-center pt-6 text-poppins">Make your reservation right here, <br class="block"> for right now or in a few days </p>
            <div class="flex flex-col">
                <div class="block mt-4 mx-auto">
                    <a class="block text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl text-white" href="">Instant Booking</a>
                </div>
                <div class="block pt-5 mx-auto">
                    <a class="block text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl text-white" href="">Normal Booking</a>
                </div>
            </div>
        </div>
    </div>


    {{-- ROW 4 --}}
    <div class="col-span-1 bg-[url(/img/003-book-a-taxi-to-the-airport-almuñecar.png)] bg-cover h-140 text-white font-bold">
    </div>
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center font-bold pt-20 font-roboto">Book a taxi to the airport</h1>
        <p class="text-xl text-center pt-7 font-poppins">If you arrive at Malaga airport and need transportation, please call us.</p>
        <p class="text-xl text-center pt-3 font-poppins">We are here when you need us with 24-hour availability, all week long. </p>
        <p class="text-xl text-center pt-3 font-poppins">We make sure tha you and your family get the best care posible. </p>
        <div class="flex">
            <div class="block pt-5 mx-auto">
                <a class="block text-center text-2xl font-bold bg-emerald-500 p-3 w-md rounded-xl text-white font-poppins" href="">Book Airport Taxi</a>
            </div>
        </div>
    </div>


    {{-- ROW 5 --}}
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center pt-20 font-bold font-roboto">Book a taxi for the cruises.</h1>
        <p class="text-xl text-center pt-7 font-poppins font-bold">We are here when you need us. If you are travelling on a cruise</p>
        <p class="text-xl text-center pt-2 font-poppins font-bold">we will take you to any port on the Costa Tropical, Almeria or Málaga</p>
    </div>
    <div class="col-span-1 bg-[url(/img/004-book-a-taxi-for-you-cruises-in-almunecar.png)] bg-cover bg-left-bottom h-140 text-white font-bold">
    </div>


    {{-- ROW 6 --}}
    <div class="pt-6 col-span-full bg-[url(/img/006-taxi-almuñecar-puerta-del-mar.png)] bg-bottom bg-cover text-white font-bold">
        <h2 class="drop-shadow-xl text-6xl text-center pt-30 font-roboto font-bold">Price Rates</h2>
        <p class="drop-shadow-xl text-2xl text-center font-poppins">Check taxi fare rates</p>
        <div class="pt-3">
            <a class="block mt-4 mx-auto text-center text-2xl bg-emerald-500 p-2 w-md rounded-xl font-poppins" href="">Official Rates</a>
        </div>
        <div class="pt-2">
            <a class="block mt-2 mx-auto text-center text-2xl bg-emerald-500 p-2 w-md rounded-xl font-poppins" href="">Rates For Pre-Arranges Reservations</a>
        </div>
    </div>


    {{-- ROW 7 --}}
    <div class="col-span-1 bg-[url(/img/istockphoto-1191221365.jpg)] bg-cover bg-left-bottom h-140 text-white font-bold">
    </div>
    <div class="col-span-1 mt-8 text-black font-bold">
        <h2 class="text-5xl text-center pt-20 font-roboto">Tropical Coast Routes.</h1>
        <p class="text-xl text-center pt-7 font-poppins">
            If you want to discover the best sunsets on the Costa Tropical, don't hesitate to call us.
        </p>
        <p class="text-xl text-center pt-2 font-poppins">
            At taxi almunecar 16, we will take care of organizing the best route for your trip.
        </p>
        <div class="pt-6">
            <a class="block mt-2 mx-auto text-center text-2xl bg-emerald-500 p-3 w-md rounded-xl font-poppins text-white" href="">Book a taxi for your routes</a>
        </div>
    </div>


    {{-- ROW 8 --}}
    <div class="col-span-1 text-black font-poppins font-bold">
        <div class="p-10">
            <form action="">
                <input class="block p-2 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="name and surname">
                <input class="block p-3 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="phone">
                <input class="block p-3 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="email">
                <input class="block p-3 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="booking type">
                <input class="block p-3 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="taxi pickup">
                <input class="block p-3 mt-1 w-full bg-emerald-500 placeholder-white" type="text" placeholder="taxi destination">
                <input class="block p-3 mt-3 w-full bg-emerald-600 text-white" type="submit" value="Make your reservation!">
            </form>

        </div>
    </div>
    <div class="col-span-1 bg-[url(/img/fran-fernandez-r9uyVJ7_K6s-unsplash.jpg)] bg-center bg-cover text-white font-bold">
        <h3 class="block text-6xl text-center pt-25 font-roboto">
            Make your reservation here
        </h3>
        <p class="text-white text-xl text-center font-poppins pt-8 px-15">
            If you are arriving or going to the airport need transportation, please do not hesitate to call us. We are here whe you need us with 24-hour availability.
            We make sure that you and your family get bes care posible.
        </p>

    </div>

</div>
@endsection
