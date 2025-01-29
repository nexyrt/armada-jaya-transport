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
                    Rental Mobil Lepas Kunci
                </h1>
                <p class="text-lg text-white/80 mb-8">
                    Nikmati kebebasan berkendara dengan layanan rental mobil lepas kunci kami.
                    Anda dapat menyetir sendiri mobil pilihan dengan nyaman dan aman.
                </p>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Mengapa Memilih Layanan Lepas Kunci?</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Benefit 1 -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Harga Terjangkau</h3>
                        <p class="text-gray-600">
                            Nikmati harga yang lebih ekonomis dibandingkan dengan layanan rental mobil dengan supir.
                        </p>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fleksibilitas Waktu</h3>
                        <p class="text-gray-600">
                            Bebas mengatur jadwal perjalanan sesuai keinginan Anda tanpa terikat dengan jadwal supir.
                        </p>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Privasi Terjaga</h3>
                        <p class="text-gray-600">
                            Berkendara dengan lebih privat bersama keluarga atau teman tanpa kehadiran orang lain.
                        </p>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl transition-shadow">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Mobil Terawat</h3>
                        <p class="text-gray-600">
                            Semua armada kami selalu dalam kondisi prima dan terawat untuk kenyamanan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Cars Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12">Armada Lepas Kunci</h2>

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
                            </div>

                            <!-- Price Info Box -->
                            <div class="bg-gray-50 rounded-xl p-4 mb-6">
                                <div class="flex items-center justify-center space-x-2 text-gray-600 mb-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-center">
                                        Hubungi kami untuk penawaran terbaik
                                    </p>
                                </div>
                                <div class="text-sm text-center text-gray-500">
                                    Harga menyesuaikan durasi sewa
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
                                <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya tertarik dengan rental mobil ' . $car->name . ' untuk layanan lepas kunci. Mohon informasi harga dan ketersediaannya.') }}"
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
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            <p class="text-gray-500 mb-4">
                                Mohon maaf, tidak ada mobil yang tersedia untuk saat ini
                            </p>
                            <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan ketersediaan mobil untuk layanan lepas kunci.') }}"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-primary-blue text-white font-semibold rounded-xl hover:bg-primary-blue/90 transition-colors">
                                <span>Hubungi Kami</span>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Syarat Rental Lepas Kunci</h2>

                <div class="bg-white rounded-3xl p-8 shadow-md">
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-6 h-6 rounded-full bg-primary-blue flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm">1</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Dokumen Pribadi</h3>
                                <p class="text-gray-600">KTP dan SIM A aktif yang masih berlaku</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-6 h-6 rounded-full bg-primary-blue flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm">2</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Jaminan</h3>
                                <p class="text-gray-600">Motor atau STNK asli sebagai jaminan selama masa rental</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-6 h-6 rounded-full bg-primary-blue flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm">3</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Domisili</h3>
                                <p class="text-gray-600">Berdomisili di Yogyakarta dan sekitarnya (dibuktikan dengan
                                    KTP
                                    atau Surat Keterangan)</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-6 h-6 rounded-full bg-primary-blue flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-white text-sm">4</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Usia</h3>
                                <p class="text-gray-600">Minimal 21 tahun dan maksimal 65 tahun</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                                'question' => 'Berapa lama waktu minimal sewa?',
                                'answer' => 'Minimal waktu sewa untuk layanan lepas kunci adalah 24 jam atau 1 hari.',
                            ],
                            [
                                'question' => 'Apakah ada biaya tambahan?',
                                'answer' =>
                                    'Harga sudah termasuk asuransi. Biaya tambahan hanya untuk BBM dan overtime jika melebihi waktu sewa.',
                            ],
                            [
                                'question' => 'Bagaimana sistem pembayaran?',
                                'answer' =>
                                    'Pembayaran dapat dilakukan secara tunai atau transfer bank. Minimal DP 30% untuk booking mobil.',
                            ],
                            [
                                'question' => 'Apa yang terjadi jika terlambat mengembalikan?',
                                'answer' =>
                                    'Keterlambatan akan dikenakan biaya overtime sebesar 10% dari harga sewa per jam.',
                            ],
                            [
                                'question' => 'Apakah bisa antar jemput mobil?',
                                'answer' =>
                                    'Ya, kami menyediakan layanan antar jemput mobil dengan biaya tambahan sesuai lokasi.',
                            ],
                        ];
                    @endphp

                    @foreach ($faqs as $faq)
                        <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-md">
                            <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4">
                                <span class="text-lg font-semibold">{{ $faq['question'] }}</span>
                                <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" x-collapse>
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
    <section class="py-20 ">
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
                            Siap Untuk Memesan?
                        </h2>
                        <p class="text-white/80 mb-8 max-w-xl mx-auto">
                            Hubungi kami sekarang untuk informasi lebih lanjut dan pemesanan mobil sesuai kebutuhan Anda
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://wa.me/your-number"
                                class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-white text-primary-blue font-semibold rounded-xl hover:bg-opacity-90 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <span>Chat WhatsApp</span>
                            </a>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-primary-blue transition-colors">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
