@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary-blue min-h-[600px] pt-48 pb-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating Circles -->
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>

            <!-- Road-like Elements -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-white/5 transform -skew-y-3"></div>
            <div class="absolute bottom-10 left-0 right-0 h-16 bg-white/5 transform skew-y-3"></div>

            <!-- Glowing Dots -->
            <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-pulse-slow"></div>
            <div class="absolute top-2/3 right-1/3 w-3 h-3 bg-white/30 rounded-full animate-pulse-delay"></div>
            <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <!-- Text Content - Left Side -->
                    <div class="lg:w-1/2 animate-fade-in-up">
                        <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold text-white mb-6">
                            Solusi Transportasi
                            <span class="relative inline-block">
                                Terpercaya
                                <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 358 12" fill="none">
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
                                class="bg-white text-primary-blue px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg inline-flex items-center">
                                <span>Lihat Layanan</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <a href="{{ route('contact') }}"
                                class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg inline-flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                <span>Hubungi Kami</span>
                            </a>
                        </div>
                    </div>

                    <!-- Image - Right Side -->
                    <div class="lg:w-1/2 mt-12 lg:mt-0 relative animate-fade-in-right">
                        <div class="relative">
                            <!-- Decorative Circles -->
                            <div class="absolute -top-20 -right-20 w-72 h-72 bg-white/10 rounded-full blur-xl"></div>
                            <div
                                class="absolute bottom-10 right-10 w-32 h-32 bg-white/20 rounded-full blur-xl animate-pulse">
                            </div>

                            <!-- Car Image with Enhanced Shadow -->
                            <div class="relative z-10">
                                <div
                                    class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-3/4 h-8 bg-black/20 blur-xl rounded-full">
                                </div>
                                <img src="{{ asset('images/cars/Innova-Reborn.png') }}" alt="Hero Car"
                                    class="relative z-10 w-full h-auto max-w-2xl mx-auto animate-float">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-20 relative">
        <!-- Background Decorations -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-slow">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-delay">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header with Animation -->
                <div class="text-center mb-16" x-data="{ shown: true }" x-intersect="shown = true">
                    <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark"
                        x-show="shown" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform -translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        Layanan Kami
                    </h2>
                    <p class="text-gray-600" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        Pilih layanan yang sesuai dengan kebutuhan perjalanan Anda
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Rental Lepas Kunci -->
                    <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden"
                        x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                        x-transition:enter="transition ease-out duration-500 delay-100"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0">
                        <!-- Card Glow Effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <div
                                class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-x-0 -bottom-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -left-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -right-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                        </div>

                        <div class="relative">
                            <!-- Icon Container -->
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                </svg>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl font-bold mb-4 group-hover:text-primary-blue transition-colors">Rental Lepas
                                Kunci</h3>
                            <p class="text-gray-600 mb-6">
                                Sewa mobil tanpa supir untuk kebebasan perjalanan Anda
                            </p>

                            <!-- Feature Tags -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Tanpa Supir
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Fleksibel
                                </span>
                            </div>

                            <!-- Link -->
                            <a href="{{ route('services.lepas-kunci') }}"
                                class="inline-flex items-center text-primary-blue font-medium transition-all group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Selengkapnya
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Carter Dalam Kota -->
                    <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden"
                        x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                        x-transition:enter="transition ease-out duration-500 delay-200"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0">
                        <!-- Card Glow Effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <div
                                class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-x-0 -bottom-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -left-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -right-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                        </div>

                        <div class="relative">
                            <!-- Icon Container -->
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl font-bold mb-4 group-hover:text-primary-blue transition-colors">Carter Dalam
                                Kota</h3>
                            <p class="text-gray-600 mb-6">
                                Layanan sewa mobil dengan supir untuk area dalam kota
                            </p>

                            <!-- Feature Tags -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Dengan Supir
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Dalam Kota
                                </span>
                            </div>

                            <!-- Link -->
                            <a href="{{ route('services.carter-dalam') }}"
                                class="inline-flex items-center text-primary-blue font-medium transition-all group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Selengkapnya
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Carter Luar Kota -->
                    <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden"
                        x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                        x-transition:enter="transition ease-out duration-500 delay-300"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0">
                        <!-- Card Glow Effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <div
                                class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-x-0 -bottom-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -left-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -right-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                        </div>

                        <div class="relative">
                            <!-- Icon Container -->
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl font-bold mb-4 group-hover:text-primary-blue transition-colors">Carter Luar
                                Kota</h3>
                            <p class="text-gray-600 mb-6">
                                Layanan sewa mobil dengan supir untuk perjalanan luar kota
                            </p>

                            <!-- Feature Tags -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Dengan Supir
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Luar Kota
                                </span>
                            </div>

                            <!-- Link -->
                            <a href="{{ route('services.carter-regular') }}"
                                class="inline-flex items-center text-primary-blue font-medium transition-all group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Selengkapnya
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Regular -->
                    <div class="group bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden"
                        x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                        x-transition:enter="transition ease-out duration-500 delay-400"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0">
                        <!-- Card Glow Effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <div
                                class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-x-0 -bottom-px h-px bg-gradient-to-r from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -left-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                            <div
                                class="absolute inset-y-0 -right-px w-px bg-gradient-to-b from-transparent via-primary-blue/50 to-transparent">
                            </div>
                        </div>

                        <div class="relative">
                            <!-- Icon Container -->
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg mb-8">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>

                            <!-- Content -->
                            <h3 class="text-xl font-bold mb-4 group-hover:text-primary-blue transition-colors">Regular</h3>
                            <p class="text-gray-600 mb-6">
                                Layanan transportasi sharing antar kota dengan jadwal rutin
                            </p>

                            <!-- Feature Tags -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Sharing
                                </span>
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    Terjadwal
                                </span>
                            </div>

                            <!-- Link -->
                            <a href="{{ route('services.carter-regular') }}"
                                class="inline-flex items-center text-primary-blue font-medium transition-all group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Selengkapnya
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 right-1/4 w-72 h-72 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-slow">
            </div>
            <div
                class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-delay">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" x-data="{ shown: false }" x-intersect="shown = true">
                    <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark"
                        x-show="shown" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform -translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        Armada Kami
                    </h2>
                    <p class="text-gray-600" x-show="shown"
                        x-transition:enter="transition ease-out duration-500 delay-200"
                        x-transition:enter-start="opacity-0 transform -translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        Pilihan kendaraan berkualitas untuk kebutuhan transportasi Anda
                    </p>
                </div>

                <!-- Cars Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($cars as $car)
                        <div class="group bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500"
                            x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 transform translate-y-4"
                            x-transition:enter-end="opacity-100 transform translate-y-0">
                            <!-- Image Container -->
                            <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                                <!-- Car Image -->
                                <img src="{{ $car->image ?? asset('images/car-placeholder.png') }}"
                                    alt="{{ $car->name }}"
                                    class="w-full h-full object-contain object-center group-hover:scale-105 transition-transform duration-700 ease-out">

                                <!-- Overlay with Gradient -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <!-- Capacity Badge -->
                                <div
                                    class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full shadow-lg">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
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
                                <h3 class="text-xl font-bold mb-2 group-hover:text-primary-blue transition-colors">
                                    {{ $car->name }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ $car->description }}</p>

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

                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan rental mobil ' . $car->name . '. Mohon informasi harga dan ketersediaannya.') }}"
                                    target="_blank"
                                    class="group/btn block w-full bg-accent-green hover:bg-green-600 text-white text-center py-3 rounded-xl transition-all hover:shadow-lg transform hover:-translate-y-0.5">
                                    <div class="flex items-center justify-center space-x-2">
                                        <svg class="w-5 h-5 transform transition-transform group-hover/btn:scale-110"
                                            fill="currentColor" viewBox="0 0 24 24">
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

                <!-- View All Cars Link -->
                <div class="text-center mt-12" x-data="{ shown: false }" x-intersect="shown = true" x-show="shown"
                    x-transition:enter="transition ease-out duration-500 delay-200"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0">
                    <a href="{{ route('cars') }}"
                        class="inline-flex items-center justify-center px-8 py-3 bg-white text-primary-blue rounded-full font-semibold hover:bg-primary-blue hover:text-white transition-all transform hover:scale-105 hover:shadow-lg">
                        <span>Lihat Semua Armada</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Map Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-slow">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-delay">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2
                        class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                        Area Layanan Kami
                    </h2>
                    <p class="text-gray-600">
                        Menjangkau berbagai kota di Kalimantan untuk memenuhi kebutuhan transportasi Anda
                    </p>
                </div>

                <!-- Coverage Cities Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <!-- Kalimantan Selatan -->
                    <div class="bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all group">
                        <div class="flex items-center space-x-4 mb-6">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-xl font-bold text-gray-900 group-hover:text-primary-blue transition-colors">
                                    Kalimantan Selatan</h3>
                                <p class="text-gray-600">Kantor Pusat Banjarmasin</p>
                            </div>
                        </div>

                        <!-- Cities List -->
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 text-gray-600">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Banjarmasin</span>
                            </div>
                            <div class="flex items-center space-x-3 text-gray-600">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Banjarbaru</span>
                            </div>
                            <div class="flex items-center space-x-3 text-gray-600 opacity-60">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Dan kota lainnya</span>
                            </div>
                        </div>

                        <!-- Contact Button -->
                        <div class="mt-6">
                            <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya ingin menanyakan layanan transportasi untuk area Kalimantan Selatan') }}"
                                class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Hubungi Kami
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Kalimantan Timur -->
                    <div class="bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all group">
                        <div class="flex items-center space-x-4 mb-6">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-xl font-bold text-gray-900 group-hover:text-primary-blue transition-colors">
                                    Kalimantan Timur</h3>
                                <p class="text-gray-600">Kantor Cabang Samarinda</p>
                            </div>
                        </div>

                        <!-- Cities List -->
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 text-gray-600">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Samarinda</span>
                            </div>
                            <div class="flex items-center space-x-3 text-gray-600">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Balikpapan</span>
                            </div>
                            <div class="flex items-center space-x-3 text-gray-600 opacity-60">
                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Dan kota lainnya</span>
                            </div>
                        </div>

                        <!-- Contact Button -->
                        <div class="mt-6">
                            <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya ingin menanyakan layanan transportasi untuk area Kalimantan Timur') }}"
                                class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group/link">
                                <span
                                    class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary-blue after:transition-transform after:duration-300 after:ease-in-out after:content-[''] group-hover/link:after:scale-x-100">
                                    Hubungi Kami
                                </span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover/link:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="bg-white/50 backdrop-blur-sm rounded-2xl p-6 shadow-sm">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-blue mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Kami melayani perjalanan ke berbagai kota di Kalimantan. Hubungi kami untuk informasi rute
                                dan layanan spesifik sesuai kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
