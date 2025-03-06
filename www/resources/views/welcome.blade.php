@extends('layout.layout')


@section('body')

<div class="grid grid-cols-2 grid-rows-9 gap-0">
    {{-- --}}
    <div class="col-span-full bg-[url(/img/001-a-taxi-in-almuñecar.png)] bg-cover mx-auto min-w-full h-140 text-white font-bold pt-15">
            <span class="block text-center text-8xl">Taxi?</span>
            <span class="block text-center text-8xl">We take you to your destination</span>
            <div class="block pt-15">
                <a class="block mx-auto text-center text-xl bg-green-600 p-3 w-md rounded-xl font-primary" href="">Make your reservation here</a>
            </div>
    </div>

    {{-- --}}
    <div class="col-span-1 text-grey-800 font-bold pt-20 pl-6 h-140">
        <h1 class="text-left text-6xl ">Manuel García.</h1>
        <p class="text-left text-xl pt-3">telefono: 667033917.</p>
        <p class="text-left text-xl">mail: info@taxialmunecar16.com.</p>
        <p class="text-left text-xl">licencia de taxi nº16, Almuñecar.</p>
        <p class="text-left text-xl">vehiculo preparado para viajes con bebés, niños o mascotas.</p>

        <div class="block pt-5">
            <a class="block text-center text-xl bg-green-600 p-3 w-md rounded-xl text-white" href="">Make your reservation here</a>
        </div>
    </div>

    <div class="col-span-1 bg-[url(/img/book-a-taxi-in-granada-2024.jpg)] bg-cover h-140 text-white font-bold">
    </div>

    {{-- --}}
    <div class=" col-span-full bg-[url(/img/002-a-taxi-in-almuñecar-24-hours.png)] bg-bottom h-140 text-white font-bold">
        <div class="backdrop-blur-xs h-full">
            <h2 class="text-8xl text-center pt-36">Servicio 24h</h2>
            <p class="text-3xl text-center pt-12 ">Make your reservation right here: For right now or in a few days</p>
            <p class="text-3xl text-center ">have your reservation ready to have everything ready</p>
            <div class="flex self-center">
                <div class="block pt-5 mx-3">
                    <a class="block text-center text-xl bg-green-600 p-3 w-md rounded-xl text-white" href="">Instant Booking</a>
                </div>
                <div class="block pt-5 mx-3">
                    <a class="block text-center text-xl bg-green-600 p-3 w-md rounded-xl text-white" href="">Normal Booking</a>
                </div>
            </div>
        </div>
    </div>

    {{-- --}}
    <div class="col-span-1 bg-[url(/img/003-book-a-taxi-to-the-airport-almuñecar.png)] bg-cover h-140 text-white font-bold">
    </div>
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center font-bold pt-20">Book a taxi to the airport</h1>
        <p class="text-xl text-center pt-7 font-primary">If you arrive at Malaga Airport and need transportation, please don't hesitate to call us.</p>
        <p class="text-xl text-center pt-7">We are here when you neew us with 24-hour availability, all week long. We make sure tha you and your family get the best care posible.</p>
    </div>

    {{-- --}}
    <div class="col-span-1 h-140 text-black">
        <h2 class="text-5xl text-center pt-20 font-bold">Book a taxi to the airport</h1>
        <p class="text-xl text-center pt-7 font-sans">if you arrive at Malaga Airport and need transportation, please don't hesitate to call us.</p>
        <p class="text-xl text-center pt-7"> We are here when you neew us with 24-hour availability, all week long. We make sure tha you and your family get the best care posible.</p>
    </div>
    <div class="col-span-1 bg-[url(/img/004-book-a-taxi-for-you-cruises-in-almunecar.png)] bg-cover h-140 text-white font-bold">
    </div>

    {{-- --}}
    <div class="pt-6 col-span-full bg-[url(/img/006-taxi-almuñecar-puerta-del-mar.png)] bg-bottom h-90 text-white font-bold">
        <h2 class="drop-shadow-xl text-6xl text-center pt-2 font-bold">Price Rates</h2>
        <p class="drop-shadow-xl text-3xl text-center">Check taxi fare rates</p>
        <div class="pt-5">
            <a class="block mx-auto text-center text-xl bg-green-600 p-3 w-md rounded-xl" href="">Official Rates</a>
        </div>
        <div class="pt-2">
            <a class="block mx-auto text-center text-xl bg-green-600 p-3 w-md rounded-xl" href="">Rates For Pre-Arranges Reservations</a>
        </div>
    </div>

</div>


<!--
<div className="flex ">
    <div class="">1</div>
    <div class="">2</div>
    <div class="">3</div>
    <div>4</div>
    <div>5</div>

</div>
-->
@endsection
