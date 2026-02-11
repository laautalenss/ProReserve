@extends('layouts.app')

@section('title', 'Inicio - ProReserve')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[calc(100vh-5rem)] p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Bienvenido a ProReserve
        </h1>
        <p class="text-lg text-gray-600 mb-8">
            Gestiona tus servicios y reservas de forma simple, rápida y profesional
        </p>

        <!-- Contenedor de tarjetas -->
        <div class="flex flex-wrap justify-center gap-3">
            <!-- Tarjeta Restauracion -->
            <div class="bg-white block max-w-sm border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-40 object-cover" src="{{ asset('images/restauracion.jpg') }}" alt="Restauración" />
                </a>
                <div class="p-6 text-center">
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-gray-900">Restauración</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 shadow-md font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none transition-all duration-200">
                        Reserva en tu restaurante favorito
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Bienestar -->
            <div class="bg-white block max-w-sm border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-40 object-cover" src="{{ asset('images/bienestar.jpg') }}" alt="Bienestar" />
                </a>
                <div class="p-6 text-center">
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-gray-900">Bienestar</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 shadow-md font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none transition-all duration-200">
                        Entrena en tu gimnasio
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Ocio -->
            <div class="bg-white block max-w-sm border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-40 object-cover" src="{{ asset('images/ocio.jpg') }}" alt="Ocio" />
                </a>
                <div class="p-6 text-center">
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-gray-900">Ocio</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 shadow-md font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none transition-all duration-200">
                        Disfruta de tu tiempo libre
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Salud -->
            <div class="bg-white block max-w-sm border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img class="rounded-t-lg w-64 h-40 object-cover" src="{{ asset('images/salud.jpg') }}" alt="Salud" />
                </a>
                <div class="p-6 text-center">
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-gray-900">Salud</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 shadow-md font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none transition-all duration-200">
                        Cuida de tu salud
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection