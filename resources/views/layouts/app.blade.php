<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        @livewireStyles
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <meta name="theme-color" content="#6777ef" />
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
    </head>
    <body class="font-sans antialiased" x-data="{ showModal1: false, showModal2: false }"
    :class="{'overflow-y-hidden': showModal1 | showModal2  }" >
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="text-center overflow-x-scroll">
                <div class="p-8 m-8 bg-white shadow-lg rounded-lg inline-block w-full" style="max-width: 800px;" >
                    {{ $slot }}
                </div>
            </main> 
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        @stack('modals')
        @stack('scripts')

        @livewireScripts
        <script>
            if('serviceWorker' in navigator){
              window.addEventListener('load', function(){
                navigator.serviceWorker.register('./sw.js').then(function(reg){
                    console.log('Service Worker has been registerd for scope: ' + reg.scope)
                })
              })
            }else{
                console.log('service workker not working')
            }
        </script>
    </body>
</html>
