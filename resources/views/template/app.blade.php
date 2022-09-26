<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

       @include('template.includes.styles')

        <style>
            body {
                font-family: 'Roboto', sans-serif;
                
            }
        </style>
    </head>
    <body class="antialiased">

         <!-- Navbar Start-->
        <header class="nav-holder make-sticky shadow">
            <div id="navbar" role="navigation" class="navbar navbar-dark navbar-expand-lg " style="background: #fe7805">
                <div class="container">

                    @livewire('page.nav-bar-menu')

                </div>
            </div>
        </header>
        <!-- Navbar End-->
        <div class="relative flex items-top justify-center  ">
            <div class=" mx-auto ">
                <div class="flex justify-center">
                    <img src="{{ asset('images/fast-food-logo-emblem.png') }}" class="img text-center" height="55%" width="55%"/>
                </div>

            </div>
        </div>
        <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 ">
            <div class=" mx-auto ">
                @yield('content')
            </div>
        </div>


    </body>
</html>
