@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary-blue min-h-[600px] pt-48 pb-20">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Floating Circles -->
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>

            <!-- Glowing Dots -->
            <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-pulse-slow"></div>
            <div class="absolute top-2/3 right-1/3 w-3 h-3 bg-white/30 rounded-full animate-pulse-delay"></div>
            <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
        </div>

        <div class="container mx-auto max-w-4xl px-4">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Text Content - Left Side -->
                <div class="lg:w-1/2 animate-fade-in-up">
                    <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold text-white mb-6">
                        Solusi Transportasi
                        <span class="relative inline-block">
                            Terpercaya
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 358 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9C118.957 4.47226 274.957 2.47226 355 3" stroke="white" stroke-width="6"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                    </h1>
                    <h2 class="text-4xl md:text-5xl xl:text-6xl font-bold text-white/90 mb-8">
                        untuk Setiap Perjalanan Anda
                    </h2>
                    <p class="text-lg text-white/80 mb-8 max-w-xl">
                        Nikmati perjalanan nyaman dengan armada berkualitas dan pelayanan profesional kami
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#layanan"
                            class="bg-white text-primary-blue px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg">
                            Lihat Layanan
                        </a>
                        <a href="{{ route('contact') }}"
                            class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <!-- Image - Right Side -->
                <div class="lg:w-1/2 mt-12 lg:mt-0 relative animate-fade-in-right">
                    <div class="relative">
                        <!-- Decorative circle -->
                        <div class="absolute -top-20 -right-20 w-72 h-72 bg-white/10 rounded-full blur-xl"></div>

                        <!-- Car image -->
                        <img src="{{ asset('images/cars/Innova-Reborn.png') }}" alt="Hero Car"
                            class="relative z-10 w-full h-auto max-w-2xl mx-auto animate-float">

                        <!-- Decorative elements -->
                        <div class="absolute bottom-10 right-10 animate-pulse">
                            <div class="bg-white/20 w-32 h-32 rounded-full blur-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20">
        <div class="container mx-auto max-w-4xl px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Layanan Kami</h2>
                <p class="text-gray-600">
                    Pilih layanan yang sesuai dengan kebutuhan perjalanan Anda
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Rental Lepas Kunci -->
                <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Rental Lepas Kunci</h3>
                    <p class="text-gray-600 mb-4">
                        Sewa mobil tanpa supir untuk kebebasan perjalanan Anda
                    </p>
                    <a href="{{ route('services.lepas-kunci') }}"
                        class="text-primary-blue font-medium hover:text-primary-blue/80 transition-colors inline-flex items-center">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Carter Dalam Kota -->
                <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Carter Dalam Kota</h3>
                    <p class="text-gray-600 mb-4">
                        Layanan sewa mobil dengan supir untuk area dalam kota
                    </p>
                    <a href="{{ route('services.carter-dalam') }}"
                        class="text-primary-blue font-medium hover:text-primary-blue/80 transition-colors inline-flex items-center">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Carter Luar Kota -->
                <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Carter Luar Kota</h3>
                    <p class="text-gray-600 mb-4">
                        Layanan sewa mobil dengan supir untuk perjalanan luar kota
                    </p>
                    <a href="{{ route('services.carter-regular') }}"
                        class="text-primary-blue font-medium hover:text-primary-blue/80 transition-colors inline-flex items-center">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Regular -->
                <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Regular</h3>
                    <p class="text-gray-600 mb-4">
                        Layanan transportasi sharing antar kota dengan jadwal rutin
                    </p>
                    <a href="{{ route('services.carter-regular') }}"
                        class="text-primary-blue font-medium hover:text-primary-blue/80 transition-colors inline-flex items-center">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto max-w-4xl px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Armada Kami</h2>
                <p class="text-gray-600">
                    Pilihan kendaraan berkualitas untuk kebutuhan transportasi Anda
                </p>
            </div>

            <!-- Cars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($cars as $car)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all group">
                        <!-- Image Container -->
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $car->image ?? asset('images/car-placeholder.png') }}"
                                alt="{{ $car->name }}"
                                class="max-w-sm mx-auto object-cover object-center group-hover:scale-105 transition-transform duration-300">

                            <!-- Capacity Badge -->
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full">
                                <div class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="text-sm font-medium">{{ $car->capacity }} Orang</span>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $car->name }}</h3>
                            <p class="text-gray-600 mb-4 max-h-14 overflow-y-auto">{{ $car->description }}</p>

                            <!-- Features -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    {{ $car->transmission }}
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    AC
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Audio
                                </span>
                            </div>

                            <!-- Prices Grid -->
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-500">Lepas Kunci</span>
                                    <span class="font-semibold">Rp
                                        {{ number_format($car->lepas_kunci_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-500">Carter Dalam</span>
                                    <span class="font-semibold">Rp
                                        {{ number_format($car->carter_dalam_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-500">Carter Luar</span>
                                    <span class="font-semibold">Rp
                                        {{ number_format($car->carter_luar_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm text-gray-500">Regular</span>
                                    <span class="font-semibold">Rp
                                        {{ number_format($car->regular_price, 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <!-- WhatsApp Button -->
                            <a href="https://wa.me/your-number?text={{ urlencode($car->wa_template) }}"
                                class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-3 rounded-xl transition-colors">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    <span>Pesan via WhatsApp</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
