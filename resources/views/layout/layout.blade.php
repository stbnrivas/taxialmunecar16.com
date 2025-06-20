<!DOCTYPE html>
<html lang="{{ app()->getLocale(); }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('js-header')

</head>
<body>
    <div class="h-screen">
        <!--
        <div class="xs:visible   sm:invisible md:invisible lg:invisible"> xs</div>
        <div class="xs:invisible sm:visible   md:invisible lg:invisible"> sm</div>
        <div class="xs:invisible sm:invisible md:visible   lg:invisible"> md</div>
        <div class="xs:invisible sm:invisible md:invisible lg:visible  "> xl</div>
        -->
        <nav class="bg-white text-gray-900 border-gray-200 dark:bg-gray-900 dark:text-gray-40 pt-5 pb-5 h-20">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="https://taxialmunecar16.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white font-poppins">Taxi Almuñecar</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:visible xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
                <ul class="font-bold flex flex-col lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="font-poppins block px-3 text-white bg-emerald-700 rounded-sm lg:bg-transparent lg:text-emerald-700 lg:p-0 dark:text-white lg:dark:text-emeral-500" aria-current="page">
                        {{__('Home')}}
                    </a>
                </li>
                <li>
                    <a href="#booking-type" class="font-poppins  block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-700 lg:p-0 dark:text-white lg:dark:hover:text-emerald-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        {{__('Book Airport Taxi')}}
                    </a>
                </li>
                <li>
                    <a href="#booking-type" class="font-poppins block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-700 lg:p-0 dark:text-white lg:dark:hover:text-emerald-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        {{__('Book Cruises Taxi')}}
                    </a>
                </li>
                <li>
                    <a href="#booking-type" class="font-poppins block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-700 lg:p-0 dark:text-white lg:dark:hover:text-emerald-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        {{__('Tourist Routes')}}
                    </a>
                </li>
                <li>
                    <a href="#contact-info" class="font-poppins block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-700 lg:p-0 dark:text-white lg:dark:hover:text-emerald-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        {{__('Contact')}}
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-700 lg:p-0 dark:text-white lg:dark:hover:text-emerald-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        <img class="w-13 " src="/img/Bandera_de_Almunecar_Granada.jpg" alt="">
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        {{-- --}}
        @yield('body')
        {{-- --}}

        <footer class="bg-emerald-500 h-72">
            <div class="flex flex-row place-content-between xl:mx-96 pt:10 xl:pt-20 text-white">
                <div class="text-xl font-poppins font-bold">{{__('Legal Notice')}}</div>
                <div class="text-xl font-poppins font-bold">{{__('Privacy Policy')}}</div>
                <div class="text-xl font-poppins font-bold">{{__('Cookie Policy')}}</div>
                <div class="text-xl font-poppins font-bold">{{__('Accesibility')}}</div>
            </div>
            <div class="flex flex-row place-content-between mx-20 pt-20">
                <img class="h-10 md:h-16 object-cover" src="/img/logo-acelera-pyme.png" alt="">
                <img class="h-10 md:h-16 object-cover" src="/img/logo-kitdigital.png" alt="">
                <img class="h-10 md:h-16 object-cover" src="/img/logo-plan-recuperacion-transformacion.png" alt="">
                <img class="h-10 md:h-16 object-cover" src="/img/logo-ES-Financiado-por-la-Union-Europea.png" alt="">
            </div>
        </footer>


        <div class="flex">
            <a href="{{ env("APP_URL") }}/es/">
            <img class="fixed bottom-35 left-5 h-10 mr-20" src="/img/locales/es.svg" alt="traducir a castellano">
            </a>
            <a href="{{ env("APP_URL") }}/en/">
            <img class="fixed bottom-35 left-20 h-10 mr-20" src="/img/locales/en.svg" alt="translate to english">
            </a>
            <a href="{{ env("APP_URL") }}/fr/">
            <img class="fixed bottom-35 left-35 h-10 mr-20" src="/img/locales/fr.svg" alt="traduire en français">
            </a>
            <a href="{{ env("APP_URL") }}/de/">
            <img class="fixed bottom-35 left-50 h-10 mr-20" src="/img/locales/de.svg" alt="ins Deutsche übersetzen">
        </a>
        </div>

        <div class="flex">
            <a href="https://api.whatsapp.com/send/?phone=34667033917&text&type=phone_number&app_absent=0">
                <img class="fixed bottom-25 right-10 md:right-25 xl:right-50 h-20" src="/img/logos/whatsapp.svg" alt="whatsapp logo">
            </a>
        </div>

    </div>


    <script src="{{url('/js/flowbite.min.js')}} "></script>
    <script setup>
        import { initFlowbite } from 'flowbite'

        // initialize components based on data attribute selectors
        onMounted(() => {
            initFlowbite();
        })
    </script>
    @yield('js')
</body>
</html>