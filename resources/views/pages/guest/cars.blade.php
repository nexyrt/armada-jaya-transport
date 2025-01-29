@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary-blue min-h-[400px] pt-48 pb-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Floating Circles -->
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>

            <!-- Road-like Elements -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-white/5 transform -skew-y-3"></div>
            <div class="absolute bottom-10 left-0 right-0 h-16 bg-white/5 transform skew-y-3"></div>

            <!-- Decorative Dots -->
            <div class="absolute top-1/4 right-1/4 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse-delay"></div>
            <div class="absolute top-1/2 right-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse-slow"></div>
        </div>

        <!-- Content Container -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Text Content -->
                <div class="text-center mb-12">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                        Armada Kami
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                        Pilihan kendaraan berkualitas dan terawat untuk berbagai kebutuhan perjalanan Anda.
                        Tersedia untuk seluruh layanan transportasi kami.
                    </p>
                </div>

                <!-- Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Maintained Cars -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Unit Terawat</h3>
                                <p class="text-white/70 text-sm">Perawatan rutin berkala</p>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Service -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Sopir Profesional</h3>
                                <p class="text-white/70 text-sm">Berpengalaman & ramah</p>
                            </div>
                        </div>
                    </div>

                    <!-- 24/7 Support -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold">Layanan 24 Jam</h3>
                                <p class="text-white/70 text-sm">Support kapanpun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car List Section -->
    <section class="py-20 relative">
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

    <!-- Other Available Cars Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Content Box -->
                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-md relative overflow-hidden">
                    <!-- Background Decoration -->
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-blue-50 rounded-full transform translate-x-1/2 -translate-y-1/2 opacity-50">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-48 h-48 bg-blue-50 rounded-full transform -translate-x-1/2 translate-y-1/2 opacity-50">
                    </div>

                    <!-- Content -->
                    <div class="relative">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-primary-blue" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold mb-4">Cari Mobil Lain?</h2>
                            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                                Kami memiliki berbagai pilihan armada lainnya yang siap melayani kebutuhan perjalanan Anda.
                                Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut.
                            </p>
                        </div>

                        <!-- Contact Options -->
                        <div class="flex flex-col md:flex-row items-stretch gap-4 max-w-2xl mx-auto">
                            <!-- WhatsApp Card -->
                            <div
                                class="flex-1 bg-gradient-to-br from-accent-green/90 to-accent-green rounded-2xl p-6 text-white group hover:shadow-lg transition-all">
                                <div class="flex flex-col h-full">
                                    <div class="flex items-center space-x-3 mb-4">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                        </svg>
                                        <span class="font-semibold">WhatsApp</span>
                                    </div>
                                    <p class="text-sm text-white/90 mb-4">Chat langsung dengan tim kami untuk informasi
                                        armada dan penawaran terbaik</p>
                                    <a href="https://wa.me/6281222449999?text={{ urlencode('Halo, saya ingin menanyakan ketersediaan armada untuk rental') }}"
                                        class="mt-auto inline-flex items-center justify-center space-x-2 bg-white/10 hover:bg-white/20 text-white px-4 py-2 rounded-xl transition-colors">
                                        <span>Chat Sekarang</span>
                                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Call Card -->
                            <div
                                class="flex-1 bg-gradient-to-br from-primary-blue/90 to-primary-blue rounded-2xl p-6 text-white group hover:shadow-lg transition-all">
                                <div class="flex flex-col h-full">
                                    <div class="flex items-center space-x-3 mb-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="font-semibold">Telepon</span>
                                    </div>
                                    <p class="text-sm text-white/90 mb-4">Hubungi nomor kami untuk berbicara langsung
                                        dengan customer service</p>
                                    <a href="tel:your-number"
                                        class="mt-auto inline-flex items-center justify-center space-x-2 bg-white/10 hover:bg-white/20 text-white px-4 py-2 rounded-xl transition-colors">
                                        <span>Hubungi Kami</span>
                                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Features List -->
                        <div class="mt-12 pt-8 border-t border-gray-100">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                                <div>
                                    <div class="flex items-center justify-center space-x-2 text-gray-600 mb-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="font-medium">Pilihan Beragam</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Berbagai tipe mobil tersedia</p>
                                </div>
                                <div>
                                    <div class="flex items-center justify-center space-x-2 text-gray-600 mb-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="font-medium">Respon Cepat</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Informasi ketersediaan langsung</p>
                                </div>
                                <div>
                                    <div class="flex items-center justify-center space-x-2 text-gray-600 mb-2">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                        </svg>
                                        <span class="font-medium">Harga Fleksibel</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Menyesuaikan kebutuhan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold mb-4">Galeri Armada</h2>
                <p class="text-gray-600">
                    Dokumentasi armada kami yang selalu terawat dan siap melayani perjalanan Anda
                </p>
            </div>

            <!-- Gallery Grid with Modal -->
            <div x-data="{
                selectedImage: '',
                showModal: false,
                images: Array.from({ length: 12 }, (_, i) => ({
                    id: i + 1,
                    src: `/images/gallery/${i + 1}.jpeg`
                }))
            }">
                <!-- Image Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="aspect-square rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all cursor-pointer group"
                            @click="selectedImage = '{{ asset('images/gallery/' . $i . '.jpeg') }}'; showModal = true">
                            <img src="{{ asset('images/gallery/' . $i . '.jpeg') }}"
                                alt="Gallery Image {{ $i }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    @endfor
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

    @push('scripts')
        <script>
            document.addEventListener('keydown', (e) => {
                if (!window.Alpine) return;

                const modal = document.querySelector('[x-data]').__x.$data;

                if (!modal.showModal) return;

                if (e.key === 'Escape') {
                    modal.showModal = false;
                } else if (e.key === 'ArrowLeft') {
                    const currentIndex = modal.images.findIndex(img => img.src === modal.selectedImage);
                    const newIndex = (currentIndex - 1 + modal.images.length) % modal.images.length;
                    modal.selectedImage = modal.images[newIndex].src;
                } else if (e.key === 'ArrowRight') {
                    const currentIndex = modal.images.findIndex(img => img.src === modal.selectedImage);
                    const newIndex = (currentIndex + 1) % modal.images.length;
                    modal.selectedImage = modal.images[newIndex].src;
                }
            });
        </script>
    @endpush
@endsection
