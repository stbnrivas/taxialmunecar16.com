<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <div class="h-screen grid">

        <nav class="bg-white text-gray-900 border-gray-200 dark:bg-gray-900 dark:text-gray-40 pt-2 h-12">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="https://taxialmunecar16.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">Taxi Almuñecar</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
                <ul class="font-bold flex flex-col lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block px-3 text-white bg-blue-700 rounded-sm lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white lg:dark:text-blue-500" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Book Airport Taxi
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Book Cruises Taxi
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Tourist Routes
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        <img class="w-13 " src="img/Bandera_de_Almunecar_Granada.jpg" alt="">
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        {{-- --}}
        @yield('body')
        {{-- --}}

    </div>

    <script src="{{url('/js/flowbite.min.js')}} "></script>
    <script setup>
        import { initFlowbite } from 'flowbite'

        // initialize components based on data attribute selectors
        onMounted(() => {
            initFlowbite();
        })
        </script>
</body>
</html>