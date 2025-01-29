@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary-blue min-h-[400px] pt-48 pb-20">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>

            <!-- Additional Road-like Elements -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-white/5 transform -skew-y-3"></div>
            <div class="absolute bottom-10 left-0 right-0 h-16 bg-white/5 transform skew-y-3"></div>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Carter Mobil Antar Kota
                </h1>
                <p class="text-lg text-white/80 mb-8">
                    Layanan transportasi antar kota yang aman dan nyaman untuk perjalanan Anda di Kalimantan.
                    Tersedia rute Kalimantan Timur ke Kalimantan Utara dan Kalimantan Selatan.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#routes"
                        class="bg-white text-primary-blue px-6 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg">
                        Lihat Rute
                    </a>
                    <a href="#armada"
                        class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-primary-blue transition-all transform hover:scale-105 hover:shadow-lg">
                        Pilih Armada
                    </a>
                </div>

                <!-- Province Badges -->
                <div class="flex flex-wrap justify-center gap-4 mt-12">
                    <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span class="text-white font-medium">Kalimantan Timur</span>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span class="text-white font-medium">Kalimantan Utara</span>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span class="text-white font-medium">Kalimantan Selatan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Routes Section will be here --}}
    <section id="routes" class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-6">Rute Perjalanan</h2>
                <p class="text-gray-600 text-center mb-12">
                    Pilih rute perjalanan Anda untuk mendapatkan informasi detail dan penawaran terbaik
                </p>

                <!-- Province Route Tabs -->
                <div x-data="{ activeTab: 'kaltim-kalut' }" class="mb-8">
                    <div class="flex flex-wrap justify-center gap-4 mb-8">
                        <button @click="activeTab = 'kaltim-kalut'"
                            :class="{
                                'bg-primary-blue text-white': activeTab === 'kaltim-kalut',
                                'bg-white text-primary-dark hover:bg-gray-50': activeTab !== 'kaltim-kalut'
                            }"
                            class="px-6 py-3 rounded-full font-semibold transition-all transform hover:scale-105">
                            Kaltim ⇄ Kalut
                        </button>
                        <button @click="activeTab = 'kaltim-kalsel'"
                            :class="{
                                'bg-primary-blue text-white': activeTab === 'kaltim-kalsel',
                                'bg-white text-primary-dark hover:bg-gray-50': activeTab !== 'kaltim-kalsel'
                            }"
                            class="px-6 py-3 rounded-full font-semibold transition-all transform hover:scale-105">
                            Kaltim ⇄ Kalsel
                        </button>
                    </div>

                    <!-- Kaltim-Kalut Routes -->
                    <div x-show="activeTab === 'kaltim-kalut'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $kaltimKalutRoutes = [
                                    ['from' => 'Samarinda', 'to' => 'Balikpapan'],
                                    ['from' => 'Samarinda', 'to' => 'Bontang'],
                                    ['from' => 'Samarinda', 'to' => 'Sanggata'],
                                    ['from' => 'Samarinda', 'to' => 'Bengalon'],
                                    ['from' => 'Samarinda', 'to' => 'Sangkulirang'],
                                    ['from' => 'Samarinda', 'to' => 'Wahau'],
                                    ['from' => 'Samarinda', 'to' => 'Berau'],
                                    ['from' => 'Samarinda', 'to' => 'Tanjung Selor'],
                                    ['from' => 'Samarinda', 'to' => 'Malinau'],
                                    ['from' => 'Samarinda', 'to' => 'Tabang'],
                                ];
                            @endphp

                            @foreach ($kaltimKalutRoutes as $route)
                                <div class="bg-white rounded-2xl p-4 shadow-md hover:shadow-xl transition-all group">
                                    <div class="flex justify-between items-center">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-3">
                                                <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                </svg>
                                                <div class="flex items-center">
                                                    <span class="font-medium">{{ $route['from'] }}</span>
                                                    <svg class="w-8 h-8 mx-2 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                    <span class="font-medium">{{ $route['to'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan layanan carter luar kota untuk rute ' . $route['from'] . ' - ' . $route['to']) }}"
                                            class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors ml-4">
                                            <span class="text-sm font-medium">Cek Harga</span>
                                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Return Route Info -->
                        <div class="mt-6 bg-blue-50 rounded-2xl p-4">
                            <div class="flex gap-3">
                                <svg class="w-6 h-6 text-primary-blue flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-600">
                                    Rute tersedia untuk perjalanan dua arah. Anda dapat memulai perjalanan dari kota
                                    manapun.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Kaltim-Kalsel Routes -->
                    <div x-show="activeTab === 'kaltim-kalsel'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $kaltimKalselRoutes = [
                                    ['from' => 'Samarinda', 'to' => 'Tanjung'],
                                    ['from' => 'Samarinda', 'to' => 'Tanjung Tabalong'],
                                    ['from' => 'Samarinda', 'to' => 'Paringin'],
                                    ['from' => 'Samarinda', 'to' => 'Barabai'],
                                    ['from' => 'Samarinda', 'to' => 'Kadangan'],
                                    ['from' => 'Samarinda', 'to' => 'Tapin'],
                                    ['from' => 'Samarinda', 'to' => 'Rantau'],
                                    ['from' => 'Samarinda', 'to' => 'Binuang'],
                                    ['from' => 'Samarinda', 'to' => 'Matapura'],
                                    ['from' => 'Samarinda', 'to' => 'Banjarbaru'],
                                    ['from' => 'Samarinda', 'to' => 'Banjarmasin'],
                                ];
                            @endphp

                            @foreach ($kaltimKalselRoutes as $route)
                                <div class="bg-white rounded-2xl p-4 shadow-md hover:shadow-xl transition-all group">
                                    <div class="flex justify-between items-center">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-3">
                                                <svg class="w-5 h-5 text-primary-blue" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                </svg>
                                                <div class="flex items-center">
                                                    <span class="font-medium">{{ $route['from'] }}</span>
                                                    <svg class="w-8 h-8 mx-2 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                    <span class="font-medium">{{ $route['to'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan layanan carter luar kota untuk rute ' . $route['from'] . ' - ' . $route['to']) }}"
                                            class="inline-flex items-center text-primary-blue hover:text-primary-blue/80 transition-colors ml-4">
                                            <span class="text-sm font-medium">Cek Harga</span>
                                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Return Route Info -->
                        <div class="mt-6 bg-blue-50 rounded-2xl p-4">
                            <div class="flex gap-3">
                                <svg class="w-6 h-6 text-primary-blue flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-600">
                                    Rute tersedia untuk perjalanan dua arah. Anda dapat memulai perjalanan dari kota
                                    manapun.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Section will be here --}}
    <section class="pb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-6">Keunggulan Layanan Antar Kota</h2>
                <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
                    Pilih layanan yang sesuai dengan kebutuhan Anda. Regular untuk perjalanan ekonomis, atau Carter untuk
                    kenyamanan privat.
                </p>

                <!-- Service Type Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <!-- Regular Service -->
                    <div class="bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-10 h-10 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Regular</h3>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Harga lebih ekonomis</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Jadwal keberangkatan rutin</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Berbagi perjalanan dengan penumpang lain</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Carter Service -->
                    <div class="bg-white rounded-3xl p-8 shadow-md hover:shadow-xl transition-all">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-10 h-10 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Carter</h3>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Fleksibilitas waktu keberangkatan</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Privasi kendaraan khusus</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-accent-green flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Penjemputan sesuai lokasi Anda</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Common Benefits -->
                <h3 class="text-2xl font-bold text-center mb-8">Fasilitas Untuk Semua Layanan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Experienced Driver -->
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
                            Sopir Berpengalaman
                        </h3>
                        <p class="text-gray-600">
                            Dilengkapi sopir profesional yang menguasai rute perjalanan antar kota Kalimantan.
                        </p>
                    </div>

                    <!-- Safe Journey -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Perjalanan Aman
                        </h3>
                        <p class="text-gray-600">
                            Armada terawat, dilengkapi P3K dan asuransi perjalanan untuk ketenangan Anda.
                        </p>
                    </div>

                    <!-- Support Team -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-all group">
                        <div
                            class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 group-hover:text-primary-blue transition-colors">
                            Tim Support 24 Jam
                        </h3>
                        <p class="text-gray-600">
                            Bantuan teknis dan layanan pelanggan siap membantu kapanpun Anda butuhkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section will be here --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Umum</h2>

                <div class="space-y-4">
                    @php
                        $faqs = [
                            [
                                'question' => 'Apa perbedaan layanan Regular dan Carter?',
                                'answer' =>
                                    'Layanan Regular adalah transportasi sharing dengan jadwal keberangkatan yang sudah tetap dan berbagi kendaraan dengan penumpang lain (lebih ekonomis). Sedangkan Carter adalah sewa mobil privat yang bisa menyesuaikan dengan jadwal Anda.',
                            ],
                            [
                                'question' => 'Kapan jadwal keberangkatan untuk layanan Regular?',
                                'answer' =>
                                    'Jadwal keberangkatan Regular tersedia setiap hari. Untuk detail jadwal dan ketersediaan kursi, silakan hubungi kami via WhatsApp.',
                            ],
                            [
                                'question' => 'Bagaimana dengan sistem pembayaran?',
                                'answer' =>
                                    'Untuk Regular, pembayaran dilakukan di awal perjalanan. Untuk Carter, diperlukan DP minimal 30% untuk booking dan pelunasan bisa dilakukan saat keberangkatan.',
                            ],
                            [
                                'question' => 'Berapa lama estimasi perjalanan?',
                                'answer' =>
                                    'Durasi perjalanan bervariasi tergantung rute dan kondisi jalan. Kami akan memberikan estimasi waktu yang akurat saat Anda menghubungi kami.',
                            ],
                            [
                                'question' => 'Di mana titik penjemputan dan pengantaran?',
                                'answer' =>
                                    'Untuk Regular, ada titik kumpul yang sudah ditentukan. Untuk Carter, kami bisa menjemput dan mengantar sesuai lokasi yang Anda inginkan dalam area layanan.',
                            ],
                            [
                                'question' => 'Apakah ada bagasi untuk barang bawaan?',
                                'answer' =>
                                    'Ya, setiap penumpang diperbolehkan membawa bagasi sesuai kapasitas bagasi mobil. Untuk barang berlebih mungkin dikenakan biaya tambahan.',
                            ],
                            [
                                'question' => 'Apakah tersedia layanan antar jemput ke bandara/pelabuhan?',
                                'answer' =>
                                    'Ya, kami melayani rute ke/dari bandara dan pelabuhan di setiap kota yang tersedia dalam rute kami.',
                            ],
                            [
                                'question' => 'Apa yang harus dilakukan jika ada kendala saat perjalanan?',
                                'answer' =>
                                    'Tim support kami siap 24 jam. Anda bisa langsung menghubungi nomor yang diberikan saat pemesanan untuk bantuan darurat.',
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

                <!-- Additional Info Box -->
                <div class="mt-8 bg-blue-50 rounded-2xl p-6">
                    <div class="flex space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">
                            Masih ada pertanyaan? Jangan ragu untuk menghubungi kami via WhatsApp. Tim kami siap membantu
                            Anda memilih layanan yang paling sesuai dengan kebutuhan perjalanan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section will be here --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-primary-blue rounded-3xl overflow-hidden">
                <div class="relative px-6 py-16 md:px-12">
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
                    <div class="relative text-center md:text-left md:flex md:items-center md:justify-between">
                        <div class="mb-8 md:mb-0 md:mr-8">
                            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                                Siap Untuk Perjalanan?
                            </h2>
                            <p class="text-white/80 max-w-xl">
                                Pilih layanan Regular untuk perjalanan ekonomis atau Carter untuk kenyamanan privat.
                                Hubungi kami untuk informasi jadwal dan harga terbaik.
                            </p>
                        </div>
                        <div class="flex flex-col space-y-4">
                            <!-- Regular Service Button -->
                            <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan jadwal dan harga untuk layanan Regular Travel') }}"
                                target="_blank"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-accent-green text-white font-semibold rounded-xl hover:bg-green-600 transition-all transform hover:scale-105 hover:shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <span>Cek Jadwal Regular</span>
                            </a>

                            <!-- Carter Service Button -->
                            <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan informasi untuk layanan Carter') }}"
                                target="_blank"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-white text-primary-blue font-semibold rounded-xl hover:bg-opacity-90 transition-all transform hover:scale-105 hover:shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <span>Tanya Carter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
