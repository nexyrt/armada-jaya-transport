@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary-blue min-h-[400px] pt-48 pb-20">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Carter Mobil Dalam Kota
                </h1>
                <p class="text-lg text-white/80 mb-8">
                    Solusi transportasi aman dan nyaman untuk kebutuhan perjalanan di Kalimantan.
                    Tersedia di Banjarmasin, Banjarbaru, Samarinda, dan Balikpapan.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#area-layanan"
                        class="bg-white text-primary-blue px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg">
                        Cek Area Layanan
                    </a>
                    <a href="#armada"
                        class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg">
                        Pilih Armada
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Area Section -->
    <section id="area-layanan" class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Area Layanan Kami</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Banjarmasin -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Banjarmasin</h3>
                        <p class="text-gray-600 mb-4">Melayani seluruh area Banjarmasin dan sekitarnya</p>
                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin sewa mobil untuk area Banjarmasin') }}"
                            class="inline-flex items-center px-4 py-2 text-primary-blue hover:bg-primary-blue hover:text-white rounded-full transition-all transform hover:scale-105">
                            <span>Tanya Ketersediaan</span>
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Banjarbaru -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Banjarbaru</h3>
                        <p class="text-gray-600 mb-4">Layanan tersedia di seluruh wilayah Banjarbaru</p>
                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin sewa mobil untuk area Banjarmasin') }}"
                            class="inline-flex items-center px-4 py-2 text-primary-blue hover:bg-primary-blue hover:text-white rounded-full transition-all transform hover:scale-105">
                            <span>Tanya Ketersediaan</span>
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Samarinda -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Samarinda</h3>
                        <p class="text-gray-600 mb-4">Melayani perjalanan di seluruh area Samarinda</p>
                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin sewa mobil untuk area Banjarmasin') }}"
                            class="inline-flex items-center px-4 py-2 text-primary-blue hover:bg-primary-blue hover:text-white rounded-full transition-all transform hover:scale-105">
                            <span>Tanya Ketersediaan</span>
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Balikpapan -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Balikpapan</h3>
                        <p class="text-gray-600 mb-4">Tersedia untuk seluruh wilayah Balikpapan</p>
                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin sewa mobil untuk area Banjarmasin') }}"
                            class="inline-flex items-center px-4 py-2 text-primary-blue hover:bg-primary-blue hover:text-white rounded-full transition-all transform hover:scale-105">
                            <span>Tanya Ketersediaan</span>
                            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Mengapa Memilih Layanan Kami?</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Professional Driver -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Sopir Profesional
                        </h3>
                        <p class="text-gray-600">
                            Dilengkapi sopir berpengalaman yang ramah, profesional, dan menguasai rute perjalanan dalam
                            kota.
                        </p>
                    </div>

                    <!-- High Quality Fleet -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Armada Berkualitas
                        </h3>
                        <p class="text-gray-600">
                            Mobil nyaman, bersih, dan terawat dengan baik. AC dingin dan fitur lengkap untuk kenyamanan
                            Anda.
                        </p>
                    </div>

                    <!-- Flexible Booking -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Fleksibel & Mudah
                        </h3>
                        <p class="text-gray-600">
                            Pemesanan mudah via WhatsApp, tersedia 24/7. Bisa pesan untuk pemakaian langsung atau booking
                            untuk nanti.
                        </p>
                    </div>

                    <!-- Area Coverage -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Area Layanan Luas
                        </h3>
                        <p class="text-gray-600">
                            Melayani seluruh wilayah Banjarmasin, Banjarbaru, Samarinda, dan Balikpapan dengan pengetahuan
                            rute terbaik.
                        </p>
                    </div>

                    <!-- Good Price -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Harga Bersaing
                        </h3>
                        <p class="text-gray-600">
                            Penawaran harga terbaik yang disesuaikan dengan kebutuhan dan durasi perjalanan Anda.
                        </p>
                    </div>

                    <!-- Customer Service -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Pelayanan Prima
                        </h3>
                        <p class="text-gray-600">
                            Kepuasan pelanggan adalah prioritas kami. Siap membantu kapanpun Anda butuhkan dengan pelayanan
                            ramah dan responsif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Cars Section -->
    <section id="armada" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12">Armada Kami</h2>

            <div class="max-w-xl mx-auto text-center mb-12">
                <p class="text-gray-600">
                    Pilihan kendaraan nyaman dan berkualitas untuk perjalanan dalam kota Anda.
                    Dilengkapi AC dan perawatan rutin.
                </p>
            </div>

            <!-- Cars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse ($cars as $car)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all group">
                        <!-- Image Container -->
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $car->image ? asset($car->image) : asset('images/car-placeholder.png') }}"
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

                            <!-- Status Badge -->
                            <div @class([
                                'absolute top-4 left-4 px-3 py-1.5 rounded-full text-white text-sm font-medium',
                                'bg-accent-green' => $car->status === 'available',
                                'bg-accent-red' => $car->status === 'in_use',
                            ])>
                                {{ $car->status === 'available' ? 'Tersedia' : 'Digunakan' }}
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $car->name }}</h3>
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
                                <span class="text-sm bg-blue-50 text-primary-blue px-3 py-1 rounded-full">
                                    P3K
                                </span>
                            </div>

                            <!-- Info Box -->
                            <div class="bg-gray-50 rounded-xl p-4 mb-6">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-5 h-5 text-primary-blue flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <p class="text-gray-600 text-sm">
                                            Tersedia untuk perjalanan dalam kota. Harga
                                            menyesuaikan durasi sewa.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="space-y-3">
                                <!-- Details Button -->
                                <a href="{{ route('cars') }}"
                                    class="block w-full text-center px-6 py-3 border-2 border-primary-blue text-primary-blue font-semibold rounded-xl hover:bg-primary-blue hover:text-white transition-colors">
                                    Lihat Detail
                                </a>

                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil ' . $car->name . ' untuk perjalanan dalam kota di ' . $car->location . '. Mohon informasi ketersediaan dan harganya.') }}"
                                    target="_blank"
                                    class="block w-full bg-accent-green hover:bg-green-600 text-white text-center px-6 py-3 rounded-xl transition-colors">
                                    <div class="flex items-center justify-center space-x-2">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                        </svg>
                                        <span>Tanya Ketersediaan</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="max-w-md mx-auto">
                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <p class="text-gray-500 mb-4">
                                Mohon maaf, tidak ada armada yang tersedia untuk saat ini
                            </p>
                            <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan ketersediaan mobil untuk perjalanan dalam kota.') }}"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-primary-blue text-white font-semibold rounded-xl hover:bg-primary-blue/90 transition-colors">
                                <span>Hubungi Kami</span>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Umum</h2>

                <div class="space-y-4">
                    @php
                        $faqs = [
                            [
                                'question' => 'Berapa lama minimal waktu sewa?',
                                'answer' =>
                                    'Minimal waktu sewa untuk layanan carter dalam kota adalah 4 jam. Untuk pemesanan di atas 8 jam akan mendapat harga spesial.',
                            ],
                            [
                                'question' => 'Apakah termasuk biaya BBM dan sopir?',
                                'answer' => 'Ya, harga sudah termasuk BBM dan biaya sopir untuk perjalanan dalam kota.',
                            ],
                            [
                                'question' => 'Bagaimana sistem pembayaran?',
                                'answer' =>
                                    'Pembayaran dapat dilakukan secara tunai atau transfer bank. Untuk booking, diperlukan DP minimal 30%.',
                            ],
                            [
                                'question' => 'Apakah bisa pesan mendadak?',
                                'answer' =>
                                    'Bisa, selama unit tersedia. Namun kami sarankan untuk booking minimal 1 hari sebelumnya untuk memastikan ketersediaan.',
                            ],
                            [
                                'question' => 'Apakah ada biaya tambahan?',
                                'answer' =>
                                    'Biaya sudah all in untuk perjalanan normal dalam kota. Biaya tambahan mungkin berlaku untuk overtime atau penggunaan di luar rute yang disepakati.',
                            ],
                            [
                                'question' => 'Dimana lokasi penjemputan?',
                                'answer' =>
                                    'Kami akan menjemput Anda di lokasi yang ditentukan dalam area layanan kami tanpa biaya tambahan.',
                            ],
                        ];
                    @endphp

                    @foreach ($faqs as $faq)
                        <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md">
                            <button @click="open = !open"
                                class="flex justify-between items-center w-full px-6 py-4 text-left transition-colors hover:text-primary-blue">
                                <span class="text-lg font-semibold">{{ $faq['question'] }}</span>
                                <svg :class="{ 'rotate-180': open }"
                                    class="w-5 h-5 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2">
                                <div class="px-6 pb-4 text-gray-600">
                                    {{ $faq['answer'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-primary-blue rounded-3xl overflow-hidden">
                <div class="relative px-6 py-16 md:px-12 text-center">
                    <!-- Background Elements -->
                    <div class="absolute inset-0 overflow-hidden">
                        <div
                            class="absolute top-0 left-0 w-72 h-72 bg-white/5 rounded-full transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full transform translate-x-1/3 translate-y-1/3">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="relative">
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                            Butuh Transportasi Dalam Kota?
                        </h2>
                        <p class="text-white/80 mb-8 max-w-xl mx-auto">
                            Hubungi kami sekarang untuk mendapatkan penawaran terbaik sesuai kebutuhan perjalanan Anda
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://wa.me/your-number" target="_blank"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-white text-primary-blue font-semibold rounded-xl hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <span>Chat WhatsApp</span>
                            </a>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
