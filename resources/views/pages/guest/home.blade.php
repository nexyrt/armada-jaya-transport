@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section id="home" x-data="{
        cities: [
            { name: 'Samarinda', image: '{{ asset('images/cities/samarinda.jpg') }}' },
            { name: 'Banjarbaru', image: '{{ asset('images/cities/banjarbaru.jpg') }}' },
            { name: 'Banjarmasin', image: '{{ asset('images/cities/banjarmasin.jpeg') }}' },
            { name: 'Palangkaraya', image: '{{ asset('images/cities/palangkaraya.jpg') }}' },
            { name: 'Pontianak', image: '{{ asset('images/cities/pontianak.jpeg') }}' },
        ],
        currentIndex: 0,
        timer: null,
        init() {
            this.startSlideshow();
        },
        startSlideshow() {
            this.timer = setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.cities.length;
            }, 5000);
        },
        stopSlideshow() {
            clearInterval(this.timer);
        },
        setCity(index) {
            this.stopSlideshow();
            this.currentIndex = index;
            this.startSlideshow();
        }
    }" class="relative bg-primary-blue min-h-[600px] pt-72 pb-40 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- City Background with Overlay -->
            <template x-for="(city, index) in cities" :key="index">
                <div class="absolute inset-0 transition-all duration-1000"
                    :class="currentIndex === index ? 'opacity-70 scale-105' : 'opacity-0 scale-100'"
                    x-show="currentIndex === index" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform scale-110"
                    x-transition:enter-end="opacity-30 transform scale-105"
                    x-transition:leave="transition ease-in duration-1000"
                    x-transition:leave-start="opacity-30 transform scale-105"
                    x-transition:leave-end="opacity-0 transform scale-100">
                    <img :src="city.image" :alt="city.name" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-primary-blue/70 mix-blend-multiply"></div>
                </div>
            </template>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <!-- Text Content - Left Side -->
                    <div class="lg:w-1/2 relative z-10 animate-fade-in-up">
                        <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold text-white mb-6">
                            Solusi Transportasi
                            <span class="relative inline-block">
                                Terpercaya
                                <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 358 12" fill="none">
                                    <path class="animate-dash" d="M3 9C118.957 4.47226 274.957 2.47226 355 3" stroke="white"
                                        stroke-width="6" stroke-linecap="round" />
                                </svg>
                            </span>
                        </h1>
                        <div class="text-lg text-white/80 mb-8 space-y-4">
                            <p class="animate-fade-in-up">Melayani kebutuhan transportasi Anda di seluruh pulau Kalimantan
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="(city, index) in cities" :key="index">
                                    <button @click="setCity(index)"
                                        class="px-3 py-1 rounded-full text-sm transition-all duration-300 transform hover:scale-105"
                                        :class="currentIndex === index ? 'bg-white text-primary-blue' : 'bg-white/10 text-white'"
                                        x-text="city.name"></button>
                                </template>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <a href="#layanan"
                                class="group bg-white text-primary-blue px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg inline-flex items-center">
                                <span>Lihat Layanan</span>
                                <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-y-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <a href="https://wa.me/6281222449999"
                                class="group bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg inline-flex items-center overflow-hidden relative">
                                <span class="relative z-10">Hubungi Kami</span>
                                <svg class="w-5 h-5 ml-2 relative z-10 transition-transform duration-300 group-hover:rotate-12"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <div
                                    class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left">
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Feature Cards - Right Side -->
                    <div class="lg:w-1/2 mt-12 lg:mt-0 relative z-10 animate-fade-in-right">
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Feature Card 1 -->
                            <div
                                class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-500 transform hover:scale-105">
                                <div class="text-white">
                                    <svg class="w-8 h-8 mb-4 transform group-hover:rotate-12 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    <h3 class="font-semibold mb-2 group-hover:translate-x-1 transition-transform">Respons
                                        Cepat</h3>
                                    <p class="text-sm text-white/70">Proses mudah</p>
                                </div>
                            </div>

                            <!-- Feature Card 2 -->
                            <div
                                class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-500 transform hover:scale-105">
                                <div class="text-white">
                                    <svg class="w-8 h-8 mb-4 transform group-hover:rotate-12 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <h3 class="font-semibold mb-2 group-hover:translate-x-1 transition-transform">Seluruh
                                        Kalimantan</h3>
                                    <p class="text-sm text-white/70">Jangkauan luas</p>
                                </div>
                            </div>

                            <!-- Feature Card 3 -->
                            <div
                                class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-500 transform hover:scale-105">
                                <div class="text-white">
                                    <svg class="w-8 h-8 mb-4 transform group-hover:rotate-12 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <h3 class="font-semibold mb-2 group-hover:translate-x-1 transition-transform">Terpercaya
                                    </h3>
                                    <p class="text-sm text-white/70">Pelayanan profesional</p>
                                </div>
                            </div>

                            <!-- Feature Card 4 -->
                            <div
                                class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-500 transform hover:scale-105">
                                <div class="text-white">
                                    <svg class="w-8 h-8 mb-4 transform group-hover:rotate-12 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round"stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <h3 class="font-semibold mb-2 group-hover:translate-x-1 transition-transform">Layanan
                                        24 Jam</h3>
                                    <p class="text-sm text-white/70">Siap melayani kapanpun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-20 relative overflow-hidden" x-data="{
        activeSlide: 0,
        totalSlides: 5,
        init() {
            this.setupSlides();
        },
        setupSlides() {
            // No auto-sliding, manual control only
        },
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
        },
        prevSlide() {
            this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
        },
        getSlidePosition(index) {
            const diff = (index - this.activeSlide + this.totalSlides) % this.totalSlides;
            if (diff === 0) return 'center';
            if (diff === 1 || diff === -4) return 'right';
            if (diff === -1 || diff === 4) return 'left';
            return 'hidden';
        }
    }">
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
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2
                    class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                    Layanan Kami
                </h2>
                <p class="text-gray-600">
                    Pilih layanan yang sesuai dengan kebutuhan perjalanan Anda
                </p>
            </div>

            <!-- Services Carousel -->
            <div class="relative">
                <!-- Carousel Stage -->
                <div class="relative h-[600px] perspective-1000">
                    <!-- Cards Container -->
                    <div class="relative w-full h-full">
                        <template x-for="(_, index) in Array.from({ length: totalSlides })" :key="index">
                            <div class="absolute inset-0 w-full transition-all duration-500"
                                :class="{
                                    'z-30 opacity-100 scale-100 translate-x-0': getSlidePosition(index) === 'center',
                                    'z-20 opacity-80 scale-95 translate-x-[30%]': getSlidePosition(
                                        index) === 'right',
                                    'z-20 opacity-80 scale-95 -translate-x-[30%]': getSlidePosition(
                                        index) === 'left',
                                    'z-10 opacity-0 scale-90': getSlidePosition(index) === 'hidden'
                                }">

                                <template x-if="index === 0">
                                    <!-- Lepas Kunci Card -->
                                    <div class="w-full flex-shrink-0">
                                        <div
                                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group mx-auto max-w-lg">
                                            <!-- Gradient Overlay -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-transparent">
                                            </div>

                                            <!-- Card Content -->
                                            <div class="relative">
                                                <!-- Icon -->
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                                    </svg>
                                                </div>

                                                <!-- Title & Description -->
                                                <div class="mb-6">
                                                    <h3
                                                        class="text-2xl font-bold mb-4 group-hover:text-primary-blue transition-colors">
                                                        Rental Lepas Kunci
                                                    </h3>
                                                    <p class="text-gray-600">
                                                        Sewa mobil tanpa supir untuk kebebasan perjalanan Anda. Berkendara
                                                        dengan nyaman menggunakan mobil pilihan sesuai kebutuhan.
                                                    </p>
                                                </div>

                                                <!-- Feature Tags -->
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    <span
                                                        class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                                        Tanpa Supir
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                                        Fleksibel
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                                        Ekonomis
                                                    </span>
                                                </div>

                                                <!-- Features List -->
                                                <div class="space-y-3 mb-8">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-primary-blue flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Bebas pilih waktu keberangkatan</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-primary-blue flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Privasi perjalanan terjaga</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-primary-blue flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Harga lebih terjangkau</span>
                                                    </div>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan layanan rental lepas kunci') }}"
                                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all group-hover:shadow-lg">
                                                    <span>Sewa Sekarang</span>
                                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="index === 1">
                                    <!-- Carter Dalam Kota Card -->
                                    <div class="w-full flex-shrink-0">
                                        <div
                                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group mx-auto max-w-lg">
                                            <!-- Gradient Overlay -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-transparent">
                                            </div>

                                            <!-- Card Content -->
                                            <div class="relative">
                                                <!-- Icon -->
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent-green to-green-500/80 rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </div>

                                                <!-- Title & Description -->
                                                <div class="mb-6">
                                                    <h3
                                                        class="text-2xl font-bold mb-4 group-hover:text-accent-green transition-colors">
                                                        Carter Dalam Kota
                                                    </h3>
                                                    <p class="text-gray-600">
                                                        Layanan antar jemput dengan supir untuk perjalanan dalam kota.
                                                        Dilengkapi supir profesional yang menguasai rute perjalanan.
                                                    </p>
                                                </div>

                                                <!-- Feature Tags -->
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-green px-3 py-1 rounded-full">
                                                        Dengan Supir
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-green px-3 py-1 rounded-full">
                                                        Area Dalam Kota
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-green px-3 py-1 rounded-full">
                                                        Door to Door
                                                    </span>
                                                </div>

                                                <!-- Features List -->
                                                <div class="space-y-3 mb-8">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-green flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Sopir profesional berpengalaman</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-green flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Penjemputan sesuai lokasi Anda</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-green flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Tersedia 24 jam setiap hari</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-green flex-shrink-0"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Area layanan luas</span>
                                                    </div>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan layanan carter dalam kota') }}"
                                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all group-hover:shadow-lg">
                                                    <span>Pesan Sekarang</span>
                                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="index === 2">
                                    <!-- Carter Luar Kota Card -->
                                    <div class="w-full flex-shrink-0">
                                        <div
                                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group mx-auto max-w-lg">
                                            <!-- Gradient Overlay -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-transparent">
                                            </div>

                                            <!-- Card Content -->
                                            <div class="relative">
                                                <!-- Icon -->
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600/80 rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>

                                                <!-- Title & Description -->
                                                <div class="mb-6">
                                                    <h3
                                                        class="text-2xl font-bold mb-4 group-hover:text-purple-500 transition-colors">
                                                        Carter Luar Kota
                                                    </h3>
                                                    <p class="text-gray-600">
                                                        Layanan perjalanan antar kota dengan supir profesional. Menjangkau
                                                        berbagai kota di seluruh pulau Kalimantan.
                                                    </p>
                                                </div>

                                                <!-- Feature Tags -->
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    <span
                                                        class="text-sm bg-blue-50 text-purple-500 px-3 py-1 rounded-full">
                                                        Antar Kota
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-purple-500 px-3 py-1 rounded-full">
                                                        Dengan Supir
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-purple-500 px-3 py-1 rounded-full">
                                                        Se-Kalimantan
                                                    </span>
                                                </div>

                                                <!-- Features List -->
                                                <div class="space-y-3 mb-8">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Perjalanan antar kota
                                                            se-Kalimantan</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Supir berpengalaman rute antar
                                                            kota</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Armada nyaman & terawat</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Bantuan 24/7 selama perjalanan</span>
                                                    </div>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan layanan carter luar kota') }}"
                                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all group-hover:shadow-lg">
                                                    <span>Pesan Sekarang</span>
                                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="index === 3">
                                    <!-- Regular Travel Card -->
                                    <div class="w-full flex-shrink-0">
                                        <div
                                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group mx-auto max-w-lg">
                                            <!-- Gradient Overlay -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-transparent">
                                            </div>

                                            <!-- Card Content -->
                                            <div class="relative">
                                                <!-- Icon -->
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600/80 rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>

                                                <!-- Title & Description -->
                                                <div class="mb-6">
                                                    <h3
                                                        class="text-2xl font-bold mb-4 group-hover:text-orange-500 transition-colors">
                                                        Regular Travel
                                                    </h3>
                                                    <p class="text-gray-600">
                                                        Jadwal rutin perjalanan antar kota dengan rute tetap. Solusi
                                                        ekonomis untuk perjalanan dengan jadwal teratur.
                                                    </p>
                                                </div>

                                                <!-- Feature Tags -->
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    <span
                                                        class="text-sm bg-blue-50 text-orange-500 px-3 py-1 rounded-full">
                                                        Terjadwal
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-orange-500 px-3 py-1 rounded-full">
                                                        Ekonomis
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-orange-500 px-3 py-1 rounded-full">
                                                        Sharing
                                                    </span>
                                                </div>

                                                <!-- Features List -->
                                                <div class="space-y-3 mb-8">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Jadwal keberangkatan teratur</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Rute dan titik kumpul tetap</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Harga lebih ekonomis</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-orange-500 flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Supir profesional berpengalaman</span>
                                                    </div>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan layanan regular travel') }}"
                                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all group-hover:shadow-lg">
                                                    <span>Pesan Sekarang</span>
                                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="index === 4">
                                    <!-- Expedition & Cargo Card -->
                                    <div class="w-full flex-shrink-0">
                                        <div
                                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden group mx-auto max-w-lg">
                                            <!-- Gradient Overlay -->
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-transparent">
                                            </div>

                                            <!-- Card Content -->
                                            <div class="relative">
                                                <!-- Icon -->
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent-red to-red-500/80 rounded-2xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                    </svg>
                                                </div>

                                                <!-- Title & Description -->
                                                <div class="mb-6">
                                                    <div class="flex items-center mb-4">
                                                        <h3
                                                            class="text-2xl font-bold group-hover:text-accent-red transition-colors">
                                                            Expedition & Cargo
                                                        </h3>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent-green text-white ml-2">
                                                            Baru
                                                        </span>
                                                    </div>
                                                    <p class="text-gray-600">
                                                        Layanan pengiriman barang dan dokumen antar kota dengan jangkauan
                                                        seluruh Kalimantan. Aman, tepat waktu, dan terpercaya.
                                                    </p>
                                                </div>

                                                <!-- Feature Tags -->
                                                <div class="flex flex-wrap gap-2 mb-6">
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-red px-3 py-1 rounded-full">
                                                        Door to Door
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-red px-3 py-1 rounded-full">
                                                        Tracking
                                                    </span>
                                                    <span
                                                        class="text-sm bg-blue-50 text-accent-red px-3 py-1 rounded-full">
                                                        Asuransi
                                                    </span>
                                                </div>

                                                <!-- Features List -->
                                                <div class="space-y-3 mb-8">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-red flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Pengiriman door to door</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-red flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Tracking status pengiriman</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-red flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Asuransi pengiriman</span>
                                                    </div>
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-5 h-5 text-accent-red flex-shrink-0" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        <span class="text-gray-600">Estimasi waktu pengiriman jelas</span>
                                                    </div>
                                                </div>

                                                <!-- CTA Button -->
                                                <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya tertarik dengan layanan expedition & cargo') }}"
                                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all group-hover:shadow-lg">
                                                    <span>Kirim Sekarang</span>
                                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button @click="prevSlide"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-white p-3 rounded-full shadow-lg hover:bg-gray-50 transition-all z-40 focus:outline-none focus:ring-2 focus:ring-primary-blue">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="nextSlide"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-white p-3 rounded-full shadow-lg hover:bg-gray-50 transition-all z-40 focus:outline-none focus:ring-2 focus:ring-primary-blue">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(_, index) in Array.from({ length: totalSlides })" :key="index">
                        <button @click="activeSlide = index"
                            :class="{ 'bg-primary-blue': activeSlide === index, 'bg-gray-300': activeSlide !== index }"
                            class="w-2 h-2 rounded-full transition-all duration-300"></button>
                    </template>
                </div>
            </div>
        </div>

        @push('styles')
            <style>
                .perspective-1000 {
                    perspective: 1000px;
                }
            </style>
        @endpush
    </section>

    <!-- Car List Section -->
    <section id="armada" class="pb-20 relative">
        <!-- Section Title -->
        <div class="container mx-auto px-4 mb-12">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold mb-4">Daftar Armada</h2>
                <p class="text-gray-600">
                    Pilihan kendaraan unggulan kami yang siap melayani perjalanan Anda
                </p>
            </div>
        </div>

        <!-- Cars List -->
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-3xl shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <th class="px-6 py-4 text-left">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l3 3m0 0l-3 3m3-3H4m7-3V3m0 18v-3" />
                                        </svg>
                                        <span class="font-semibold text-gray-700">Mobil</span>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <span class="font-semibold text-gray-700">Kapasitas</span>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="font-semibold text-gray-700">Transmisi</span>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                        <span class="font-semibold text-gray-700">Fasilitas</span>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left">
                                    <span class="font-semibold text-gray-700">Pesan</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <!-- Sigra -->
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">Daihatsu Sigra</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">6 Orang</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">Manual/Matic</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            AC
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            Audio
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil Sigra') }}"
                                        class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group">
                                        <span class="font-medium">Pesan</span>
                                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <!-- Avanza -->
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">Toyota Avanza</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">7 Orang</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">Manual/Matic</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            AC
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            Audio
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil Avanza') }}"
                                        class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group">
                                        <span class="font-medium">Pesan</span>
                                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <!-- Xenia -->
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">Daihatsu Xenia</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">7 Orang</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">Manual/Matic</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            AC
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            Audio
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil Xenia') }}"
                                        class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group">
                                        <span class="font-medium">Pesan</span>
                                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <!-- Innova Klasik -->
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">Toyota Innova Klasik</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">7 Orang</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">Manual</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            AC
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            Audio
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil Innova Klasik') }}"
                                        class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group">
                                        <span class="font-medium">Pesan</span>
                                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <!-- Innova Reborn -->
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">Toyota Innova Reborn</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">7 Orang</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-gray-600">Matic</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            AC
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            Audio
                                        </span>
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-primary-blue">
                                            USB Port
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil Innova Reborn') }}"
                                        class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors group">
                                        <span class="font-medium">Pesan</span>
                                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Note Box -->
            <div class="mt-6 bg-gray-50 rounded-2xl p-6 max-w-3xl mx-auto">
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
                            Harga menyesuaikan dengan:
                        </p>
                        <ul class="mt-2 space-y-1 text-sm text-gray-500">
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Durasi sewa</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Jenis layanan (Regular/Carter)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Tujuan perjalanan</span>
                            </li>
                        </ul>
                        <p class="mt-3 text-sm text-gray-500">
                            Hubungi kami via WhatsApp untuk penawaran terbaik sesuai kebutuhan Anda
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        // Get all images from each directory
        $unitImages = File::files(public_path('images/gallery/unit-lepas-kunci'));
        $pemerintahanImages = File::files(public_path('images/gallery/pelayanan-pemerintahan'));
    @endphp

    <!-- Gallery Section -->
    <section id="gallery" class="pb-20">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold mb-4">Galeri Armada</h2>
                <p class="text-gray-600">
                    Dokumentasi armada kami yang selalu terawat dan siap melayani perjalanan Anda
                </p>
            </div>

            <!-- Gallery Tabs Container -->
            <div x-data="{
                activeTab: 'unit-lepas-kunci',
                selectedImage: '',
                showModal: false,
                getImages(category) {
                    return Array.from(document.querySelectorAll(`[data-category='${category}']`))
                        .map(img => ({
                            id: img.dataset.id,
                            src: img.src
                        }));
                }
            }" class="max-w-6xl mx-auto">
                <!-- Tab Buttons -->
                <div class="flex justify-center space-x-4 mb-8">
                    <button @click="activeTab = 'unit-lepas-kunci'"
                        :class="{
                            'bg-primary-blue text-white': activeTab === 'unit-lepas-kunci',
                            'bg-white text-gray-600 hover:bg-gray-50': activeTab !== 'unit-lepas-kunci'
                        }"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l3 3m0 0l-3 3m3-3H4m7-3V3m0 18v-3" />
                            </svg>
                            <span>Unit Lepas Kunci</span>
                        </div>
                    </button>
                    <button @click="activeTab = 'pelayanan-pemerintahan'"
                        :class="{
                            'bg-primary-blue text-white': activeTab === 'pelayanan-pemerintahan',
                            'bg-white text-gray-600 hover:bg-gray-50': activeTab !== 'pelayanan-pemerintahan'
                        }"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span>Pelayanan Pemerintahan</span>
                        </div>
                    </button>
                </div>

                <!-- Image Grid Container -->
                <div class="relative">
                    <!-- Unit Lepas Kunci Grid -->
                    <div x-show="activeTab === 'unit-lepas-kunci'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($unitImages as $index => $image)
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                                @click="selectedImage = '{{ asset('images/gallery/unit-lepas-kunci/' . basename($image)) }}'; showModal = true">
                                <img src="{{ asset('images/gallery/unit-lepas-kunci/' . basename($image)) }}"
                                    alt="Unit Lepas Kunci Image {{ $index + 1 }}" data-category="unit-lepas-kunci"
                                    data-id="{{ $index }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            </div>
                        @endforeach
                    </div>

                    <!-- Pelayanan Pemerintahan Grid -->
                    <div x-show="activeTab === 'pelayanan-pemerintahan'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($pemerintahanImages as $index => $image)
                            <div class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                                @click="selectedImage = '{{ asset('images/gallery/pelayanan-pemerintahan/' . basename($image)) }}'; showModal = true">
                                <img src="{{ asset('images/gallery/pelayanan-pemerintahan/' . basename($image)) }}"
                                    alt="Pelayanan Pemerintahan Image {{ $index + 1 }}"
                                    data-category="pelayanan-pemerintahan" data-id="{{ $index }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modal -->
                <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                    <!-- Modal Backdrop -->
                    <div class="fixed inset-0 bg-black bg-opacity-75 backdrop-blur-sm" @click="showModal = false"></div>

                    <!-- Modal Content -->
                    <div class="fixed inset-0 flex items-center justify-center p-4">
                        <div class="relative max-w-5xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl"
                            @click.away="showModal = false">
                            <!-- Close Button -->
                            <button @click="showModal = false"
                                class="absolute top-4 right-4 z-10 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <!-- Navigation Buttons -->
                            <button
                                @click="
                            let images = getImages(activeTab);
                            let currentIndex = images.findIndex(img => img.src === selectedImage);
                            let newIndex = (currentIndex - 1 + images.length) % images.length;
                            selectedImage = images[newIndex].src;
                        "
                                class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>

                            <button
                                @click="
                            let images = getImages(activeTab);
                            let currentIndex = images.findIndex(img => img.src === selectedImage);
                            let newIndex = (currentIndex + 1) % images.length;
                            selectedImage = images[newIndex].src;
                        "
                                class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>

                            <!-- Image Container -->
                            <div class="aspect-[4/3] bg-gray-100">
                                <img :src="selectedImage" alt="Selected Gallery Image"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maps Section -->
    <section id="maps" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold mb-4">Lokasi Kami</h2>
                <p class="text-gray-600">
                    Temukan lokasi kantor kami yang terdekat dengan Anda
                </p>
            </div>

            <!-- Maps Tabs Container -->
            <div x-data="{ activeMap: 'banjarmasin' }" class="max-w-5xl mx-auto">
                <!-- Tab Buttons -->
                <div class="flex justify-center space-x-4 mb-8">
                    <button @click="activeMap = 'banjarmasin'"
                        :class="{
                            'bg-primary-blue text-white': activeMap === 'banjarmasin',
                            'bg-white text-gray-600 hover:bg-gray-50': activeMap !== 'banjarmasin'
                        }"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Banjarmasin</span>
                        </div>
                    </button>
                    <button @click="activeMap = 'samarinda'"
                        :class="{
                            'bg-primary-blue text-white': activeMap === 'samarinda',
                            'bg-white text-gray-600 hover:bg-gray-50': activeMap !== 'samarinda'
                        }"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Samarinda</span>
                        </div>
                    </button>
                </div>

                <!-- Maps Container with shadow and rounded corners -->
                <div class="bg-white rounded-3xl shadow-lg p-4 overflow-hidden">
                    <!-- Banjarmasin Map -->
                    <div x-show="activeMap === 'banjarmasin'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="aspect-video">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7479.002219830409!2d114.71459975272737!3d-3.4176613964244287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68300688f3941%3A0x39f174b4ce7ad72b!2sCV.%20Armada%20jaya%20transpont!5e0!3m2!1sen!2sid!4v1738226706641!5m2!1sen!2sid"
                            class="w-full h-full rounded-2xl" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Samarinda Map -->
                    <div x-show="activeMap === 'samarinda'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="aspect-video">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6692871837913!2d117.11730879999999!3d-0.4952264999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f003f8ab2df%3A0x958b6b841220133e!2sCv.%20Armada%20jaya%20Transpont!5e0!3m2!1sen!2sid!4v1738227040611!5m2!1sen!2sid"
                            class="w-full h-full rounded-2xl" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Quick Info Box Below Map -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-xl">
                        <div x-show="activeMap === 'banjarmasin'" class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary-blue mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-600 text-sm">
                                Kantor Banjarmasin kami terletak di lokasi strategis, dekat dengan pusat kota.
                                Mudah diakses dari berbagai area di Banjarmasin.
                            </p>
                        </div>
                        <div x-show="activeMap === 'samarinda'" class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary-blue mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-600 text-sm">
                                Kantor Samarinda kami berada di area yang mudah dijangkau.
                                Tersedia tempat parkir yang luas untuk kenyamanan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- For Gallery --}}
    @push('scripts')
        <script>
            document.addEventListener('keydown', (e) => {
                if (!window.Alpine) return;

                const gallery = document.querySelector('[x-data]').__x.$data;

                if (!gallery.showModal) return;

                if (e.key === 'Escape') {
                    gallery.showModal = false;
                } else if (e.key === 'ArrowLeft') {
                    const images = gallery.getImages(gallery.activeTab);
                    const currentIndex = images.findIndex(img => img.src === gallery.selectedImage);
                    const newIndex = (currentIndex - 1 + images.length) % images.length;
                    gallery.selectedImage = images[newIndex].src;
                } else if (e.key === 'ArrowRight') {
                    const images = gallery.getImages(gallery.activeTab);
                    const currentIndex = images.findIndex(img => img.src === gallery.selectedImage);
                    const newIndex = (currentIndex + 1) % images.length;
                    gallery.selectedImage = images[newIndex].src;
                }
            });
        </script>
    @endpush

    {{-- For Services --}}
    @push('styles')
        <style>
            @keyframes dash {
                to {
                    stroke-dashoffset: 0;
                }
            }

            .animate-dash {
                stroke-dasharray: 400;
                stroke-dashoffset: 400;
                animation: dash 1.5s ease-in-out forwards;
            }
        </style>
    @endpush
@endsection
