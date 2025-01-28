<header class="bg-white shadow-md">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="text-2xl font-bold text-blue-600">
                <a href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="{{ route('services.lepas-kunci') }}" class="text-gray-700 hover:text-blue-600">Lepas Kunci</a>
                <a href="{{ route('services.carter-dalam') }}" class="text-gray-700 hover:text-blue-600">Carter Dalam Kota</a>
                <a href="{{ route('services.carter-luar') }}" class="text-gray-700 hover:text-blue-600">Carter Luar Kota</a>
                <a href="{{ route('services.regular') }}" class="text-gray-700 hover:text-blue-600">Regular</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Kontak</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div class="hidden md:hidden mt-4">
            <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-blue-600">Beranda</a>
            <a href="{{ route('services.lepas-kunci') }}" class="block py-2 text-gray-700 hover:text-blue-600">Lepas Kunci</a>
            <a href="{{ route('services.carter-dalam') }}" class="block py-2 text-gray-700 hover:text-blue-600">Carter Dalam Kota</a>
            <a href="{{ route('services.carter-luar') }}" class="block py-2 text-gray-700 hover:text-blue-600">Carter Luar Kota</a>
            <a href="{{ route('services.regular') }}" class="block py-2 text-gray-700 hover:text-blue-600">Regular</a>
            <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-blue-600">Kontak</a>
        </div>
    </nav>
</header>