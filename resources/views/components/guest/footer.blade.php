@php
    $routes = config('navigation.routes');

    $kaltimCities = ['Samarinda', 'Balikpapan', 'Bontang', 'Sangatta', 'Berau'];

    $kalselCities = ['Banjarbaru', 'Banjarmasin', 'Martapura', 'Tanjung', 'Batu Licin'];

    $kalutCities = ['Tanjung Selor', 'Tarakan', 'Malinau', 'Nunukan'];
@endphp

<footer class="bg-primary-dark">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Company Info - 4 columns -->
            <div class="lg:col-span-4">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="bg-white p-2 rounded-full">
                        <img src="{{ asset('favicon.png') }}" alt="Logo" class="h-10 w-10">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-bold text-lg">Armada Jaya</span>
                        <span class="text-gray-400">Transport</span>
                    </div>
                </div>
                <p class="text-gray-400 mb-6">
                    Solusi transportasi terpercaya untuk perjalanan Anda. Melayani area Kalimantan dengan 11 tahun
                    pengalaman dalam industri transportasi darat.
                </p>
                <div class="border-t border-gray-700 pt-6">
                    <h4 class="text-white font-semibold mb-4">Kantor Utama</h4>
                    <div class="space-y-2 text-gray-400">
                        <p class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>
                                Jl. A. Yani KM 4,5<br>
                                Banjarbaru, Kalimantan Selatan
                            </span>
                        </p>
                        <p class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>0812-2244-9999</span>
                        </p>
                        <div class="pt-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <svg class="w-2 h-2 mr-1.5 text-green-500" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                </svg>
                                Buka 24 Jam
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Coverage - 3 columns -->
            <div class="lg:col-span-3">
                <h3 class="text-white text-lg font-semibold mb-6">Kalimantan Timur</h3>
                <div class="space-y-2">
                    @foreach ($kaltimCities as $city)
                        <p class="text-gray-400">{{ $city }}</p>
                    @endforeach
                </div>

                <h3 class="text-white text-lg font-semibold mt-8 mb-6">Kalimantan Utara</h3>
                <div class="space-y-2">
                    @foreach ($kalutCities as $city)
                        <p class="text-gray-400">{{ $city }}</p>
                    @endforeach
                </div>
            </div>

            <!-- Additional Cities - 3 columns -->
            <div class="lg:col-span-3">
                <h3 class="text-white text-lg font-semibold mb-6">Kalimantan Selatan</h3>
                <div class="space-y-2">
                    @foreach ($kalselCities as $city)
                        <p class="text-gray-400">{{ $city }}</p>
                    @endforeach
                </div>

                <div class="mt-8">
                    <h4 class="text-white font-semibold mb-4">Keunggulan Kami</h4>
                    <div class="space-y-2 text-gray-400">
                        <p class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>11 Tahun Berpengalaman</span>
                        </p>
                        <p class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Sopir Profesional</span>
                        </p>
                        <p class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Armada Terawat</span>
                        </p>
                        <p class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Pelayanan 24/7</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact & Social - 2 columns -->
            <div class="lg:col-span-2">
                <h3 class="text-white text-lg font-semibold mb-6">Hubungi Kami</h3>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-8">
                    <a href="https://www.facebook.com/share/g/184W2qBmTu/" target="_blank"
                        class="bg-gray-700 hover:bg-blue-600 transition-all duration-300 rounded-full p-2.5">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://wa.me/6281222449999"
                        class="bg-gray-700 hover:bg-green-600 transition-all duration-300 rounded-full p-2.5">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </a>
                </div>

                <!-- Button CTAs -->
                <div class="space-y-4">
                    <a href="https://wa.me/6281222449999"
                        class="block w-full bg-green-600 hover:bg-green-700 text-white text-center px-4 py-3 rounded-xl transition-colors">
                        <div class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            <span>Chat WhatsApp</span>
                        </div>
                    </a>

                    <a href="tel:+6281222449999"
                        class="block w-full bg-primary-blue hover:bg-blue-700 text-white text-center px-4 py-3 rounded-xl transition-colors">
                        <div class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>Hubungi Kami</span>
                        </div>
                    </a>
                </div>

                <!-- Emergency Contact -->
                <div class="mt-8 bg-red-500/10 rounded-xl p-4">
                    <div class="flex items-start space-x-3">
                        <div class="mt-1">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-red-500 font-semibold">Kontak Darurat 24/7</h4>
                            <a href="tel:+6281222449999"
                                class="text-red-400 hover:text-red-300 transition-colors block mt-1">
                                0812-2244-9999
                            </a>
                            <p class="text-gray-400 text-sm mt-2">
                                Bantuan teknis & layanan darurat tersedia 24 jam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8">
            <div class="container mx-auto px-4">
                <div class="py-6">
                    <!-- Main Bottom Content -->
                    <div class="flex flex-col items-center lg:flex-row lg:justify-between">
                        <!-- Copyright -->
                        <div class="flex items-center space-x-2 text-gray-500 text-sm">
                            <span>&copy; {{ date('Y') }} Armada Jaya Transport.</span>
                            <span class="mx-2 text-gray-700">•</span>
                            <span>Melayani Sejak 2013</span>
                        </div>

                        <!-- Links -->
                        <div class="flex items-center space-x-6 mt-4 lg:mt-0">
                            <a href="#" class="text-gray-500 hover:text-gray-400 text-sm transition-colors">
                                Syarat & Ketentuan
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-400 text-sm transition-colors">
                                Kebijakan Privasi
                            </a>
                        </div>

                        <!-- Made with Love -->
                        <div class="text-center text-gray-500 text-sm">
                            <div class="flex items-center justify-center space-x-2">
                                <span>Made with</span>
                                <span class="text-red-500 animate-pulse">❤️</span>
                                <span>in Kalimantan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
