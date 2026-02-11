<nav class="relative bg-white/90 backdrop-blur-sm after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-gray-200 shadow-sm">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-20 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:outline-2 focus:-outline-offset-1 focus:outline-blue-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-center sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <!-- <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-8 w-auto" /> -->
                    <svg width="240" height="60" viewBox="0 0 320 90" xmlns="http://www.w3.org/2000/svg" class="h-12 w-auto">
                        <defs>
                            <linearGradient id="sunGradient" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#FF7A18" />
                                <stop offset="100%" stop-color="#FFB347" />
                            </linearGradient>
                        </defs>

                        <!-- Icon -->
                        <g transform="translate(10,10)">

                            <!-- Sun -->
                            <circle cx="35" cy="25" r="18" fill="url(#sunGradient)" opacity="0.9" />

                            <!-- Volcano -->
                            <path d="M15 60 L35 35 L55 60 Z" fill="#1E2A38" />

                        </g>

                        <!-- Brand Name -->
                        <text x="90" y="50"
                            font-family="Montserrat, Arial, sans-serif"
                            font-size="32"
                            font-weight="600"
                            fill="#1F2937">
                            Pro<tspan fill="#FF7A18">Reserve</tspan>
                        </text>

                        <!-- Tagline -->
                        <text x="92" y="70"
                            font-family="Arial, sans-serif"
                            font-size="12"
                            fill="#6B7280"
                            letter-spacing="1">
                            Lanzarote Booking Platform
                        </text>

                    </svg>

                </div>
                <div class="hidden sm:ml-10 sm:flex sm:items-center">
                    <div class="flex items-center space-x-8">
                        <a href="/" class="{{ request()->is('/') ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-100' }} px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 flex items-center">Inicio</a>
                        <a href="/inicio" class="{{ request()->is('inicio') ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-100' }} px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 flex items-center">Servicios</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-100 px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 flex items-center">Contacto</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-100 px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 flex items-center">Calendario</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="relative rounded-full p-1 text-gray-600 hover:text-gray-900 focus:outline-2 focus:outline-offset-2 focus:outline-blue-500">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <el-dropdown class="relative ml-3">
                    <button class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img src="https://ui-avatars.com/api/?name=Usuario&background=3b82f6&color=fff" alt="" class="size-8 rounded-full bg-white outline -outline-offset-1 outline-gray-200" />
                    </button>

                    <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 outline -outline-offset-1 outline-gray-200 shadow-lg transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                        <a href="{{ route('perfil') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden">Tu perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden">Configuración</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden">Cerrar sesión</a>
                    </el-menu>
                </el-dropdown>
            </div>
        </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
        <div class="space-y-2 px-4 pt-4 pb-4 bg-gray-50">
            <a href="/" class="block rounded-md {{ request()->is('/') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }} px-4 py-3 text-base font-medium transition-all duration-200">Inicio</a>
            <a href="/inicio" class="block rounded-md {{ request()->is('inicio') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600' }} px-4 py-3 text-base font-medium transition-all duration-200">Servicios</a>
            <a href="#" class="block rounded-md px-4 py-3 text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-all duration-200">Contacto</a>
            <a href="#" class="block rounded-md px-4 py-3 text-base font-medium text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-all duration-200">Calendario</a>
        </div>
    </el-disclosure>
</nav>