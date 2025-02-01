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
            <div class="max-w-7xl mx-auto">
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
                            <a href="#services"
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
    <section id="services" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-out"
        data-aos-mirror="true" class="py-20 relative overflow-hidden" x-data="{
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
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <!-- Layered Gradients -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 via-transparent to-accent-green/5"></div>

            <!-- Animated Shapes -->
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-gradient-to-br from-primary-blue/20 to-transparent rounded-full mix-blend-multiply blur-3xl animate-float-slow">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-br from-accent-green/20 to-transparent rounded-full mix-blend-multiply blur-3xl animate-float-delay">
            </div>

            <!-- Subtle Pattern -->
            <div
                class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#4A90E2_1px,transparent_1px)] [background-size:16px_16px]">
            </div>
        </div>

        <!-- Section Content -->
        <div class="container mx-auto px-4">
            <!-- Enhanced Section Title -->
            <div class="relative mb-16">
                <div class="text-center">
                    <span class="text-primary-blue font-medium tracking-wider text-sm uppercase">Our Services</span>
                    <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                            Layanan Kami
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Pilih layanan yang sesuai dengan kebutuhan perjalanan Anda
                    </p>
                </div>

                <!-- Decorative Elements -->
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-transparent via-primary-blue to-transparent">
                </div>
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

    <!-- Coverage Area Section -->
    <section id="area" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-out"
        data-aos-mirror="true" class="py-20 relative overflow-hidden bg-gray-50" x-data="{
            activeProvince: null,
            provinces: {
                'kalsel': {
                    name: 'Kalimantan Selatan',
                    cities: ['Banjarmasin', 'Banjarbaru', 'Martapura', 'Kandangan', 'Barabai', 'Tanjung'],
                    color: '#4A90E2'
                },
                'kaltim': {
                    name: 'Kalimantan Timur',
                    cities: ['Samarinda', 'Balikpapan', 'Bontang', 'Tenggarong', 'Sangatta', 'Berau'],
                    color: '#48BB78'
                },
                'kalut': {
                    name: 'Kalimantan Utara',
                    cities: ['Tanjung Selor', 'Malinau', 'Nunukan', 'Tarakan'],
                    color: '#9F7AEA'
                },
                'kalteng': {
                    name: 'Kalimantan Tengah',
                    cities: ['Kuala Kapuas', 'Muaratewe', 'Puruk Cahu', 'Palangkaraya', 'Sampit', 'Pangkalembun', ],
                    color: '#ED8936'
                },
                'kalbar': {
                    name: 'Kalimantan Barat',
                    cities: ['Pontianak', 'Singkawang', 'Ketapang', 'Sintang'],
                    color: '#F56565'
                }
            }
        }">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-slow opacity-75">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-delay opacity-75">
            </div>
            <div
                class="absolute inset-0 bg-[radial-gradient(#4A90E2_1px,transparent_1px)] [background-size:20px_20px] opacity-[0.03]">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1 bg-blue-50 text-primary-blue text-sm font-medium rounded-full mb-4">
                    Area Coverage
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                        Jangkauan Layanan
                    </span>
                </h2>
                <p class="text-lg text-gray-600">
                    Melayani kebutuhan transportasi di seluruh wilayah Kalimantan
                </p>
            </div>

            <!-- Province Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Dynamic Province Cards -->
                <template x-for="(province, id) in provinces" :key="id">
                    <div
                        class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all overflow-hidden relative group">
                        <!-- Province Header -->
                        <div class="flex items-start space-x-4 mb-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform group-hover:scale-110"
                                :style="{ backgroundColor: province.color + '10' }">
                                <svg class="w-6 h-6 transition-transform group-hover:rotate-12"
                                    :style="{ color: province.color }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-900" x-text="province.name"></h3>
                                <p class="text-gray-500 text-sm" x-text="province.cities.length + ' Kota'"></p>
                            </div>
                        </div>

                        <!-- Cities List -->
                        <div class="space-y-2">
                            <template x-for="city in province.cities" :key="city">
                                <div class="flex items-center space-x-2 text-gray-600 group/city">
                                    <svg class="w-4 h-4 text-primary-blue opacity-0 group-hover/city:opacity-100 transition-opacity"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span x-text="city"
                                        class="group-hover/city:text-primary-blue transition-colors"></span>
                                </div>
                            </template>
                        </div>

                        <!-- Decorative Corner -->
                        <div class="absolute -bottom-6 -right-6 w-12 h-12 rounded-full opacity-10"
                            :style="{ backgroundColor: province.color }"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Armada Section -->
    <section id="armada" class="relative bg-gray-50 py-20 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-slow opacity-75">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-50 rounded-full mix-blend-multiply blur-3xl animate-float-delay opacity-75">
            </div>
            <div
                class="absolute inset-0 bg-[radial-gradient(#4A90E2_1px,transparent_1px)] [background-size:20px_20px] opacity-[0.03]">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1 bg-blue-50 text-primary-blue text-sm font-medium rounded-full mb-4">
                    Our Fleet
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark relative inline-block">
                        Armada Kami
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 358 12" fill="none">
                            <path class="animate-dash" d="M3 9C118.957 4.47226 274.957 2.47226 355 3"
                                stroke="url(#gradient)" stroke-width="6" stroke-linecap="round" />
                            <defs>
                                <linearGradient id="gradient" x1="0" y1="0" x2="1"
                                    y2="0">
                                    <stop offset="0%" stop-color="#4A90E2" />
                                    <stop offset="100%" stop-color="#27364B" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h2>
                <p class="text-lg text-gray-600">
                    Pilihan kendaraan berkualitas dan terawat untuk berbagai kebutuhan perjalanan Anda
                </p>
            </div>

            <!-- Car List -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($cars as $car)
                    <div
                        class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-xl transition-all group relative overflow-hidden">
                        <!-- Car Image -->
                        <div class="relative h-64 rounded-2xl overflow-hidden mb-6">
                            @if ($car->image)
                                <img src="{{ asset($car->image) }}" alt="{{ $car->name }}"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 bg-gray-100 flex items-center justify-center">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif

                            <!-- Car Status Badge -->
                            <div class="absolute top-4 right-4">
                                @if ($car->status === 'available')
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-50 text-accent-green">
                                        <span class="w-2 h-2 bg-accent-green rounded-full animate-pulse mr-2"></span>
                                        Tersedia
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-50 text-accent-red">
                                        <span class="w-2 h-2 bg-accent-red rounded-full mr-2"></span>
                                        Digunakan
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Car Details -->
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $car->name }}</h3>
                                <p class="text-gray-600">{{ $car->description }}</p>
                            </div>

                            <!-- Car Features -->
                            <div class="flex flex-wrap gap-2">
                                <!-- Capacity -->
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-50 text-primary-blue">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    {{ $car->capacity }} Orang
                                </span>

                                <!-- Transmission -->
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-50 text-primary-blue">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    {{ $car->transmission }}
                                </span>

                                <!-- Other Features -->
                                @if ($car->features && is_array($car->features))
                                    @foreach ($car->features as $feature)
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-50 text-primary-blue">
                                            {{ $feature }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- Action Button -->
                            <div class="pt-4">
                                <a href="{{ $car->wa_link }}" target="_blank"
                                    class="inline-flex items-center justify-center w-full bg-primary-blue hover:bg-blue-600 text-white px-6 py-3 rounded-xl transition-all transform hover:scale-105 hover:shadow-lg group">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    <span>Pesan Sekarang</span>
                                    <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 relative overflow-hidden" x-data="{
        activeTab: 'unit-lepas-kunci',
        selectedImage: '',
        showModal: false,
        getImages() {
            return Array.from(document.querySelectorAll(`img[data-category='${this.activeTab}']`));
        },
        nextImage() {
            const images = this.getImages();
            const currentIndex = images.findIndex(img => img.src === this.selectedImage);
            const nextIndex = (currentIndex + 1) % images.length;
            this.selectedImage = images[nextIndex].src;
        },
        prevImage() {
            const images = this.getImages();
            const currentIndex = images.findIndex(img => img.src === this.selectedImage);
            const prevIndex = (currentIndex - 1 + images.length) % images.length;
            this.selectedImage = images[prevIndex].src;
        }
    }">

        <div class="container mx-auto px-4">
            <!-- Enhanced Background Elements -->
            <div class="absolute inset-0 -z-10">
                <!-- Animated Gradient Orbs -->
                <div
                    class="absolute top-0 left-1/4 w-72 h-72 bg-gradient-to-br from-primary-blue/20 to-transparent rounded-full mix-blend-multiply blur-3xl animate-float-slow">
                </div>
                <div
                    class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-br from-accent-green/20 to-transparent rounded-full mix-blend-multiply blur-3xl animate-float-delay">
                </div>

                <!-- Subtle Grid Pattern -->
                <div
                    class="absolute inset-0 bg-[radial-gradient(#4A90E2_1px,transparent_1px)] [background-size:20px_20px] opacity-[0.03]">
                </div>

            </div>

            <!-- Enhanced Section Header -->
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
                class="text-center max-w-3xl mx-auto mb-16">
                <!-- Small Decorative Element -->
                <div class="flex justify-center mb-4 animate-bounce">
                    <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>

                <!-- Enhanced Title -->
                <div class="relative mb-6">
                    <h2 class="text-4xl md:text-5xl font-bold relative z-10">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue via-primary-dark to-primary-blue bg-300% animate-gradient">
                            Galeri Kami
                        </span>
                    </h2>
                    <!-- Decorative Line -->
                    <div class="absolute left-1/2 -translate-x-1/2 bottom-0 w-24 h-1">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary-blue to-transparent">
                        </div>
                    </div>
                </div>

                <!-- Enhanced Description -->
                <p class="text-lg text-gray-600 relative">
                    <span class="relative inline-block">
                        Dokumentasi layanan dan armada kami dalam melayani kebutuhan transportasi Anda
                        <!-- Decorative Dots -->
                        <span class="absolute -left-4 -top-4 w-2 h-2 bg-primary-blue/30 rounded-full animate-pulse"></span>
                        <span
                            class="absolute -right-4 -bottom-4 w-2 h-2 bg-accent-green/30 rounded-full animate-pulse-delay"></span>
                    </span>
                </p>
            </div>

            <!-- Gallery Tabs -->
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
                class="flex flex-wrap justify-center gap-4 mb-12">
                <!-- Unit Lepas Kunci Tab -->
                <button @click="activeTab = 'unit-lepas-kunci'"
                    class="group relative px-6 py-3 rounded-xl font-medium transition-all duration-300"
                    :class="{
                        'bg-primary-blue text-white shadow-lg': activeTab === 'unit-lepas-kunci',
                        'bg-white text-gray-600 hover:bg-gray-50': activeTab !== 'unit-lepas-kunci'
                    }">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-primary-blue to-primary-blue/80 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity -z-10">
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l3 3m0 0l-3 3m3-3H4m7-3V3m0 18v-3" />
                        </svg>
                        <span>Unit Lepas Kunci</span>
                    </div>
                </button>

                <!-- Pelayanan Pemerintahan Tab -->
                <button @click="activeTab = 'pelayanan-pemerintahan'"
                    class="group relative px-6 py-3 rounded-xl font-medium transition-all duration-300"
                    :class="{
                        'bg-primary-blue text-white shadow-lg': activeTab === 'pelayanan-pemerintahan',
                        'bg-white text-gray-600 hover:bg-gray-50': activeTab !== 'pelayanan-pemerintahan'
                    }">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-primary-blue to-primary-blue/80 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity -z-10">
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span>Pelayanan Pemerintahan</span>
                    </div>
                </button>

                <!-- Ekspedisi Tab -->
                <button @click="activeTab = 'ekspedisi'"
                    class="group relative px-6 py-3 rounded-xl font-medium transition-all duration-300"
                    :class="{
                        'bg-primary-blue text-white shadow-lg': activeTab === 'ekspedisi',
                        'bg-white text-gray-600 hover:bg-gray-50': activeTab !== 'ekspedisi'
                    }">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-primary-blue to-primary-blue/80 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity -z-10">
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span>Ekspedisi</span>
                    </div>
                </button>
            </div>

            <!-- Gallery Grid Container -->
            <div data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
                x-data="{
                    shown: true,
                    init() {
                        this.shown = true;
                    }
                }" x-show="shown" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0">

                <!-- Unit Lepas Kunci Grid -->
                <div x-show="activeTab === 'unit-lepas-kunci'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php
                        $unitImages = File::files(public_path('images/gallery/unit-lepas-kunci'));
                    @endphp
                    @foreach ($unitImages as $image)
                        <div x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                            @click="selectedImage = '{{ asset('images/gallery/unit-lepas-kunci/' . $image->getFilename()) }}'; showModal = true">
                            <img src="{{ asset('images/gallery/unit-lepas-kunci/' . $image->getFilename()) }}"
                                alt="Unit Lepas Kunci Image" data-category="unit-lepas-kunci"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    @endforeach
                </div>

                <!-- Pelayanan Pemerintahan Grid -->
                <div x-show="activeTab === 'pelayanan-pemerintahan'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php
                        $govImages = File::files(public_path('images/gallery/pelayanan-pemerintahan'));
                    @endphp
                    @foreach ($govImages as $image)
                        <div x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                            @click="selectedImage = '{{ asset('images/gallery/pelayanan-pemerintahan/' . $image->getFilename()) }}'; showModal = true">
                            <img src="{{ asset('images/gallery/pelayanan-pemerintahan/' . $image->getFilename()) }}"
                                alt="Pelayanan Pemerintahan Image" data-category="pelayanan-pemerintahan"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    @endforeach
                </div>

                <!-- Ekspedisi Grid -->
                <div x-show="activeTab === 'ekspedisi'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php
                        $ekspedisiImages = File::files(public_path('images/gallery/ekspedisi'));
                    @endphp
                    @foreach ($ekspedisiImages as $image)
                        <div x-data="{ shown: true }" x-intersect="shown = true" x-show="shown"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                            @click="selectedImage = '{{ asset('images/gallery/ekspedisi/' . $image->getFilename()) }}'; showModal = true">
                            <img src="{{ asset('images/gallery/ekspedisi/' . $image->getFilename()) }}"
                                alt="Ekspedisi Image" data-category="ekspedisi"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Image Modal -->
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
                        <!-- Previous Button -->
                        <button @click="prevImage()"
                            class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <!-- Next Button -->
                        <button @click="nextImage()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white rounded-full p-2 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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

        <!-- Keyboard Navigation for Modal -->
        @push('scripts')
            <script>
                document.addEventListener('keydown', (e) => {
                    if (!window.Alpine) return;

                    const gallery = document.querySelector('[x-data]').__x.$data;

                    if (!gallery.showModal) return;

                    if (e.key === 'Escape') {
                        gallery.showModal = false;
                    } else if (e.key === 'ArrowLeft') {
                        gallery.prevImage();
                    } else if (e.key === 'ArrowRight') {
                        gallery.nextImage();
                    }
                });
            </script>
        @endpush
    </section>

    <!-- Office Location Section -->
    <section id="location" class="py-20 relative overflow-hidden bg-gradient-to-b from-gray-50 to-white">
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
            <div data-aos="zoom-out-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
                class="text-center max-w-3xl mx-auto mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                    Temukan Kami di Kota Anda
                </h2>
                <p class="text-xl text-gray-600">
                    24/7 Siap Melayani Kebutuhan Transportasi Anda
                </p>
            </div>

            <!-- Office Tabs Container -->
            <div data-aos="zoom-out-left" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
                x-data="{ activeOffice: 'banjarbaru' }" class="max-w-5xl mx-auto">
                <!-- Tab Buttons -->
                <div class="flex justify-center space-x-4 mb-8">
                    <button @click="activeOffice = 'banjarbaru'"
                        :class="{
                            'bg-primary-blue text-white': activeOffice === 'banjarbaru',
                            'bg-white text-gray-600 hover:bg-gray-50': activeOffice !== 'banjarbaru'
                        }"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-200 shadow-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>Banjarbaru</span>
                        </div>
                    </button>
                    <button @click="activeOffice = 'samarinda'"
                        :class="{
                            'bg-primary-blue text-white': activeOffice === 'samarinda',
                            'bg-white text-gray-600 hover:bg-gray-50': activeOffice !== 'samarinda'
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

                <!-- Office Content -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                    <!-- Office Details Card -->
                    <div class="col-span-1 lg:col-span-2 group">
                        <!-- Banjarbaru Office -->
                        <div x-show="activeOffice === 'banjarbaru'" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-4"
                            x-transition:enter-end="opacity-100 transform translate-x-0"
                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden">
                            <!-- Office content for Banjarbaru -->
                            <div class="relative">
                                <div class="flex items-center space-x-4 mb-6">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3
                                            class="text-2xl font-bold text-gray-900 group-hover:text-primary-blue transition-colors">
                                            Kantor Banjarbaru</h3>
                                        <p class="text-primary-blue/80">Kalimantan Selatan</p>
                                    </div>
                                </div>
                                <!-- Banjarbaru address and details -->
                                <div class="space-y-6">
                                    <div
                                        class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                        <div
                                            class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                            <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-gray-900 font-medium">Alamat</p>
                                            <p class="text-gray-600 mt-1">Jl. Carakajaya, Permata Residence 3B</p>
                                            <p class="text-gray-600">Gambut, Landasan Ulin</p>
                                            <p class="text-gray-600">Banjarbaru, 70235</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Samarinda Office -->
                        <div x-show="activeOffice === 'samarinda'" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform translate-x-4"
                            x-transition:enter-end="opacity-100 transform translate-x-0"
                            class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all relative overflow-hidden">
                            <!-- Office content for Samarinda -->
                            <div class="relative">
                                <div class="flex items-center space-x-4 mb-6">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3
                                            class="text-2xl font-bold text-gray-900 group-hover:text-primary-blue transition-colors">
                                            Kantor Samarinda</h3>
                                        <p class="text-primary-blue/80">Kalimantan Timur</p>
                                    </div>
                                </div>
                                <!-- Samarinda address and details -->
                                <div class="space-y-6">
                                    <div
                                        class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                        <div
                                            class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                            <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-gray-900 font-medium">Alamat</p>
                                            <p class="text-gray-600 mt-1">Jl. Klp. Gading</p>
                                            <p class="text-gray-600">Karang Anyar, Kec. Sungai Kunjang</p>
                                            <p class="text-gray-600">Samarinda, 75243</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Operating Hours Info Card -->
                    <div class="bg-white rounded-3xl p-8 shadow-lg">
                        <!-- Support Info -->
                        <div class="space-y-6">
                            <!-- Working Hours Card -->
                            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all">
                                <div class="flex items-center space-x-3 text-gray-800">
                                    <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Buka 24 Jam</p>
                                        <p class="text-sm text-gray-600">Siap melayani kapanpun</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Service Card -->
                            <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all">
                                <div class="flex items-center space-x-3 text-gray-800">
                                    <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <div>
                                        <p class="font-semibold">CS Responsif</p>
                                        <p class="text-sm text-gray-600">Respon cepat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maps Container -->
                <div class="bg-white rounded-3xl shadow-lg p-4 overflow-hidden">
                    <!-- Banjarbaru Map -->
                    <div x-show="activeOffice === 'banjarbaru'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="aspect-video">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7479.002219830409!2d114.71459975272737!3d-3.4176613964244287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68300688f3941%3A0x39f174b4ce7ad72b!2sCV.%20Armada%20jaya%20transpont!5e0!3m2!1sen!2sid!4v1738226706641!5m2!1sen!2sid"
                            class="w-full h-full rounded-2xl" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Samarinda Map -->
                    <div x-show="activeOffice === 'samarinda'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="aspect-video">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6692871837913!2d117.11730879999999!3d-0.4952264999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f003f8ab2df%3A0x958b6b841220133e!2sCv.%20Armada%20jaya%20Transpont!5e0!3m2!1sen!2sid!4v1738227040611!5m2!1sen!2sid"
                            class="w-full h-full rounded-2xl" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Quick Info Box Below Map -->
                    <div class="mt-6 p-4 bg-gray-50 rounded-xl">
                        <!-- Banjarbaru Info -->
                        <div x-show="activeOffice === 'banjarbaru'" class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary-blue mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-600 text-sm">
                                Kantor Banjarbaru kami terletak di lokasi strategis, dekat dengan pusat kota.
                                Mudah diakses dari berbagai area di Banjarbaru.
                            </p>
                        </div>

                        <!-- Samarinda Info -->
                        <div x-show="activeOffice === 'samarinda'" class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary-blue mt-1 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-600 text-sm">
                                Kantor Samarinda kami berada di area strategis dengan akses mudah.
                                Tersedia tempat parkir yang luas untuk kenyamanan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                </div>

                <!-- Contact Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="https://wa.me/081222449999"
                        class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-accent-green text-white font-semibold rounded-xl hover:bg-green-600 transition-all transform hover:scale-105 hover:shadow-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <span>Chat WhatsApp</span>
                    </a>

                    <a href="tel:081222449999"
                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-primary-blue text-primary-blue rounded-xl hover:bg-primary-blue hover:text-white transition-all transform hover:scale-105 hover:shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>Hubungi Kami</span>
                    </a>
                </div>

                <!-- Emergency Note -->
                <div class="mt-8 p-6 bg-white/50 backdrop-blur-sm rounded-2xl border border-red-100">
                    <div class="flex items-center justify-center space-x-2 text-accent-red">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span class="font-medium">Kontak Darurat:</span>
                        <a href="tel:081222449999" class="hover:underline">0812-2244-9999</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
