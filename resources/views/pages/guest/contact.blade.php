@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary-blue min-h-[400px] pt-48 pb-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/5 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float-delay"></div>
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/5 rounded-full animate-float-reverse"></div>

            <!-- Decorative Dots -->
            <div class="absolute top-1/4 right-1/4 w-2 h-2 bg-white/30 rounded-full animate-pulse"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse-delay"></div>
            <div class="absolute top-1/2 right-1/3 w-2 h-2 bg-white/30 rounded-full animate-pulse-slow"></div>
        </div>

        <!-- Content Container -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Hubungi Kami
                </h1>
                <p class="text-lg md:text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                    Tim kami siap membantu Anda 24/7. Pilih cara yang paling nyaman untuk menghubungi kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Office Locations Section -->
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
            <!-- Section Title -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2
                    class="text-4xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-primary-dark">
                    Kantor Kami
                </h2>
                <p class="text-gray-600">
                    Memiliki dua kantor di Kalimantan untuk melayani kebutuhan transportasi Anda dengan lebih baik
                </p>
            </div>

            <!-- Office Toggle Buttons (for mobile) -->
            <div class="md:hidden flex justify-center space-x-4 mb-8" x-data="{ activeOffice: 'banjarmasin' }">
                <button @click="activeOffice = 'banjarmasin'"
                    :class="{
                        'bg-primary-blue text-white': activeOffice === 'banjarmasin',
                        'bg-gray-100 text-gray-600': activeOffice !== 'banjarmasin'
                    }"
                    class="px-4 py-2 rounded-xl transition-all">
                    Banjarmasin
                </button>
                <button @click="activeOffice = 'samarinda'"
                    :class="{
                        'bg-primary-blue text-white': activeOffice === 'samarinda',
                        'bg-gray-100 text-gray-600': activeOffice !== 'samarinda'
                    }"
                    class="px-4 py-2 rounded-xl transition-all">
                    Samarinda
                </button>
            </div>

            <!-- Office Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Banjarmasin Office -->
                <div class="group" x-show="activeOffice === 'banjarmasin' || window.innerWidth >= 768"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-4"
                    x-transition:enter-end="opacity-100 transform translate-x-0">
                    <div
                        class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all p-8 relative border border-gray-100 overflow-hidden">
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

                        <!-- Floating Decoration -->
                        <div
                            class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-blue-50/50 rounded-full blur-2xl group-hover:blur-3xl transform group-hover:scale-150 transition-all duration-700">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 -mb-8 -ml-8 w-32 h-32 bg-primary-blue/5 rounded-full blur-2xl group-hover:blur-3xl transform group-hover:scale-150 transition-all duration-700">
                        </div>

                        <!-- Content -->
                        <div class="relative">
                            <!-- Office Title with Animation -->
                            <div class="flex items-center space-x-3 mb-8">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">Kantor Banjarmasin</h3>
                                    <p class="text-primary-blue/80">Kalimantan Selatan</p>
                                </div>
                            </div>

                            <!-- Contact Info with Hover Effects -->
                            <div class="space-y-6 mb-8" x-data="{ showPhone: false }">
                                <!-- Address -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Alamat</p>
                                        <div class="text-gray-600 mt-1 space-y-1">
                                            <p>Jl. A. Yani KM 4,5 No. 56</p>
                                            <p>Gedung Permata Office Tower Lt. 3</p>
                                            <p>Banjarmasin, 70235</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone Numbers -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Telepon</p>
                                        <button @click="showPhone = !showPhone"
                                            class="mt-1 text-gray-600 hover:text-primary-blue transition-colors inline-flex items-center space-x-2">
                                            <span x-text="showPhone ? '0812-3456-7890' : 'Klik untuk melihat nomor'"></span>
                                            <svg x-show="!showPhone" class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                        <p x-show="showPhone" x-transition:enter="transition ease-out duration-200"
                                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                                            x-transition:enter-end="opacity-100 transform translate-y-0"
                                            class="text-gray-600 mt-1">0812-3456-7891</p>
                                    </div>
                                </div>

                                <!-- Operating Hours -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Jam Operasional</p>
                                        <div class="text-gray-600 mt-1">
                                            <p>Buka Setiap Hari</p>
                                            <p>24 Jam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons with Enhanced Animation -->
                            <div class="flex space-x-4">
                                <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan tentang rental mobil di Banjarmasin') }}"
                                    class="flex-1 group/button inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-accent-green to-green-500 text-white px-6 py-3 rounded-xl transition-all hover:shadow-lg hover:shadow-accent-green/25 transform hover:-translate-y-0.5">
                                    <svg class="w-5 h-5 transform group-hover/button:scale-110 transition-transform"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.2261.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    <span class="font-medium">Chat WhatsApp</span>
                                </a>
                                <a href="#maps"
                                    class="group/button inline-flex items-center justify-center px-6 py-3 border-2 border-primary-blue text-primary-blue rounded-xl hover:bg-primary-blue hover:text-white transition-all hover:shadow-lg transform hover:-translate-y-0.5">
                                    <span class="font-medium">Lihat Maps</span>
                                </a>
                            </div>

                            <!-- Status Badge -->
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-50 text-green-600">
                                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></span>
                                    Online
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Samarinda Office - Mirror structure with unique details -->
                <div class="group" x-show="activeOffice === 'samarinda' || window.innerWidth >= 768"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-x-4"
                    x-transition:enter-end="opacity-100 transform translate-x-0">
                    <div
                        class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all p-8 relative border border-gray-100 overflow-hidden">
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

                        <!-- Floating Decoration -->
                        <div
                            class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-blue-50/50 rounded-full blur-2xl group-hover:blur-3xl transform group-hover:scale-150 transition-all duration-700">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 -mb-8 -ml-8 w-32 h-32 bg-primary-blue/5 rounded-full blur-2xl group-hover:blur-3xl transform group-hover:scale-150 transition-all duration-700">
                        </div>

                        <!-- Content -->
                        <div class="relative">
                            <!-- Office Title with Animation -->
                            <div class="flex items-center space-x-3 mb-8">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-primary-blue to-primary-blue/80 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">Kantor Samarinda</h3>
                                    <p class="text-primary-blue/80">Kalimantan Timur</p>
                                </div>
                            </div>

                            <!-- Contact Info with Hover Effects -->
                            <div class="space-y-6 mb-8" x-data="{ showPhone: false }">
                                <!-- Address -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Alamat</p>
                                        <div class="text-gray-600 mt-1 space-y-1">
                                            <p>Jl. Pangeran Antasari No. 88</p>
                                            <p>Ruko Grand City Blok A-15</p>
                                            <p>Samarinda, 75131</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone Numbers -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Telepon</p>
                                        <button @click="showPhone = !showPhone"
                                            class="mt-1 text-gray-600 hover:text-primary-blue transition-colors inline-flex items-center space-x-2">
                                            <span
                                                x-text="showPhone ? '0812-3456-7892' : 'Klik untuk melihat nomor'"></span>
                                            <svg x-show="!showPhone" class="w-4 h-4" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                        <p x-show="showPhone" x-transition:enter="transition ease-out duration-200"
                                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                                            x-transition:enter-end="opacity-100 transform translate-y-0"
                                            class="text-gray-600 mt-1">0812-3456-7893</p>
                                    </div>
                                </div>

                                <!-- Operating Hours -->
                                <div class="group/item flex space-x-3 p-3 rounded-2xl hover:bg-gray-50 transition-colors">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center transform group-hover/item:scale-110 transition-transform">
                                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-gray-900 font-medium">Jam Operasional</p>
                                        <div class="text-gray-600 mt-1">
                                            <p>Buka Setiap Hari</p>
                                            <p>24 Jam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons with Enhanced Animation -->
                            <div class="flex space-x-4">
                                <a href="https://wa.me/your-number?text={{ urlencode('Halo, saya ingin menanyakan tentang rental mobil di Samarinda') }}"
                                    class="flex-1 group/button inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-accent-green to-green-500 text-white px-6 py-3 rounded-xl transition-all hover:shadow-lg hover:shadow-accent-green/25 transform hover:-translate-y-0.5">
                                    <svg class="w-5 h-5 transform group-hover/button:scale-110 transition-transform"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    <span class="font-medium">Chat WhatsApp</span>
                                </a>
                                <a href="#maps"
                                    class="group/button inline-flex items-center justify-center px-6 py-3 border-2 border-primary-blue text-primary-blue rounded-xl hover:bg-primary-blue hover:text-white transition-all hover:shadow-lg transform hover:-translate-y-0.5">
                                    <span class="font-medium">Lihat Maps</span>
                                </a>
                            </div>

                            <!-- Status Badge -->
                            <div class="absolute top-4 right-4">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-50 text-green-600">
                                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></span>
                                    Online
                                </span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operating Hours Legend -->
            <div class="max-w-4xl mx-auto mt-12">
                <div class="bg-white/50 backdrop-blur-sm rounded-2xl p-6 border border-gray-100">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <svg class="w-5 h-5 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-medium text-gray-900">Informasi Jam Operasional</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center">
                        <div class="p-4 rounded-xl bg-white">
                            <p class="font-medium text-gray-900 mb-2">Layanan Customer Service</p>
                            <p class="text-gray-600">24 Jam / 7 Hari</p>
                        </div>
                        <div class="p-4 rounded-xl bg-white">
                            <p class="font-medium text-gray-900 mb-2">Pengantaran & Pengambilan</p>
                            <p class="text-gray-600">Fleksibel sesuai kebutuhan</p>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex items-center justify-center space-x-2 text-accent-red">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span class="font-medium">Kontak Darurat:</span>
                            <a href="tel:0812-3456-7890" class="hover:underline">0812-3456-7890</a>
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
@endsection
