@extends('layouts.app')

@section('title', 'Inicio - ProReserve')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[calc(100vh-4rem)] p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold text-white mb-4">
            Bienvenido a ProReserve
        </h1>
        <p class="text-lg text-gray-300 mb-8">
            Gestiona tus servicios y reservas de forma simple, rápida y profesional
        </p>

        <!-- Contenedor de tarjetas -->
        <div class="flex flex-wrap justify-center gap-3">
            <!-- Tarjeta Restauracion -->
            <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base w-64 h-40 object-cover" src="{{ asset('images/restauracion.jpg') }}" alt="Restauración" />
                </a>
                <div class="p-6 text-center">
                    </span>
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Restauración</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Reserva en tu restaurante favorito
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Bienestar -->
            <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base w-64 h-40 object-cover" src="{{ asset('images/bienestar.jpg') }}" alt="Bienestar" />
                </a>
                <div class="p-6 text-center">
                    </span>
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Bienestar</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Entrena en tu gimnasio
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Ocio -->
            <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base w-64 h-40 object-cover" src="{{ asset('images/ocio.jpg') }}" alt="Ocio" />
                </a>
                <div class="p-6 text-center">
                    </span>
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Ocio</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Disfruta de tu tiempo libre
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta Salud -->
            <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs">
                <a href="#">
                    <img class="rounded-t-base w-64 h-40 object-cover" src="{{ asset('images/salud.jpg') }}" alt="Salud" />
                </a>
                <div class="p-6 text-center">
                    </span>
                    <a href="#">
                        <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Salud</h5>
                    </a>
                    <a href="#" class="inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
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