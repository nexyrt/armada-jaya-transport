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

        <div class="container mx-auto px-4">
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
    <section id="layanan" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Layanan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pilih layanan yang sesuai dengan kebutuhan perjalanan Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Rental Lepas Kunci -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-4">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Rental Lepas Kunci</h3>
                        <p class="text-gray-600 mb-4">Sewa mobil tanpa supir untuk kebebasan perjalanan Anda</p>
                        <a href="{{ route('services.lepas-kunci') }}" class="text-blue-600 font-medium hover:text-blue-700">
                            Selengkapnya →
                        </a>
                    </div>
                </div>

                <!-- Carter Dalam Kota -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <!-- Similar structure for other services -->
                </div>

                <!-- Carter Luar Kota -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <!-- Similar structure for other services -->
                </div>

                <!-- Regular -->
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <!-- Similar structure for other services -->
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Armada Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pilihan kendaraan berkualitas untuk kebutuhan transportasi Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($cars as $car)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ $car->image ?? asset('images/car-placeholder.png') }}" alt="{{ $car->name }}"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $car->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $car->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="text-gray-600">
                                    <span class="font-semibold">{{ $car->capacity }}</span> Penumpang
                                </div>
                                <a href="https://wa.me/your-number?text={{ urlencode($car->wa_template) }}"
                                    class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition-colors">
                                    Pesan via WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <!-- Add content about company benefits -->
        </div>
    </section>
    </section>
@endsection
