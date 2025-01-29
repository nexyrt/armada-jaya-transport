@php
    $routes = config('navigation.routes');
@endphp

<header x-data="{ isOpen: false }" class="fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4">
        <nav class="mt-4 bg-white rounded-full shadow-lg border border-gray-200">
            <div class="px-6 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo Section -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                            <div
                                class="bg-white p-2 rounded-full shadow-sm border border-gray-100 transition-transform group-hover:scale-105">
                                <img src="{{ asset('favicon.png') }}" alt="Logo" class="h-8 w-8 md:h-10 md:w-10">
                            </div>
                            <div class="hidden md:flex flex-col">
                                <span class="text-lg font-bold text-primary-blue">Armada Jaya</span>
                                <span class="text-sm text-secondary-text">Transport</span>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-1">
                        @foreach ($routes as $route)
                            <a href="{{ route($route['name']) }}"
                                class="px-4 py-2 rounded-full transition-all {{ request()->routeIs($route['name']) ? 'bg-primary-blue text-white' : 'text-primary-dark hover:bg-gray-100' }}">
                                {{ $route['label'] }}
                            </a>
                        @endforeach
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-primary-dark" @click="isOpen = !isOpen">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" @click.away="isOpen = false"
            class="lg:hidden absolute left-0 right-0">
            <div class="mx-auto mt-2 w-[90%] max-w-md bg-white rounded-[30px] py-4 px-6 shadow-lg">
                @foreach ($routes as $route)
                    <a href="{{ route($route['name']) }}" @click="isOpen = false"
                        class="block py-3 {{ request()->routeIs($route['name'])
                            ? 'text-primary-blue font-medium'
                            : 'text-primary-dark hover:text-primary-blue' }}">
                        {{ $route['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</header>
