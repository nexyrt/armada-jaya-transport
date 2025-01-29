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

    {{-- Contact Methods Section will be here --}}
    <!-- Office Locations Section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold mb-4">Kantor Kami</h2>
            <p class="text-gray-600">
                Memiliki dua kantor di Kalimantan untuk melayani kebutuhan transportasi Anda dengan lebih baik
            </p>
        </div>

        <!-- Office Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Banjarmasin Office -->
            <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-all p-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Kantor Banjarmasin</h3>
                        <p class="text-primary-blue">Kalimantan Selatan</p>
                    </div>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="flex space-x-3">
                        <svg class="w-5 h-5 text-gray-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-gray-600">Jl. A. Yani KM 4,5 No. 56</p>
                            <p class="text-gray-600">Gedung Permata Office Tower Lt. 3</p>
                            <p class="text-gray-600">Banjarmasin, 70235</p>
                        </div>
                    </div>

                    <div class="flex space-x-3">
                        <svg class="w-5 h-5 text-gray-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-gray-600">0812-3456-7890</p>
                            <p class="text-gray-600">0812-3456-7891</p>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <a href="#" class="flex-1 inline-flex items-center justify-center space-x-2 bg-accent-green hover:bg-green-600 text-white px-4 py-3 rounded-xl transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Chat WhatsApp</span>
                    </a>
                    <a href="#maps" class="inline-flex items-center justify-center px-4 py-3 border-2 border-primary-blue text-primary-blue rounded-xl hover:bg-primary-blue hover:text-white transition-colors">
                        <span>Lihat Maps</span>
                    </a>
                </div>
            </div>

            <!-- Samarinda Office -->
            <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-all p-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Kantor Samarinda</h3>
                        <p class="text-primary-blue">Kalimantan Timur</p>
                    </div>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="flex space-x-3">
                        <svg class="w-5 h-5 text-gray-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-gray-600">Jl. Pangeran Antasari No. 88</p>
                            <p class="text-gray-600">Ruko Grand City Blok A-15</p>
                            <p class="text-gray-600">Samarinda, 75131</p>
                        </div>
                    </div>

                    <div class="flex space-x-3">
                        <svg class="w-5 h-5 text-gray-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-gray-600">0812-3456-7892</p>
                            <p class="text-gray-600">0812-3456-7893</p>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <a href="#" class="flex-1 inline-flex items-center justify-center space-x-2 bg-accent-green hover:bg-green-600 text-white px-4 py-3 rounded-xl transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Chat WhatsApp</span>
                    </a>
                    <a href="#maps" class="inline-flex items-center justify-center px-4 py-3 border-2 border-primary-blue text-primary-blue rounded-xl hover:bg-primary-blue hover:text-white transition-colors">
                        <span>Lihat Maps</span>
                    </a>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2 text-center mt-12">
                <div class="bg-blue-50 rounded-3xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Perlu Bantuan?</h3>
                    <p class="text-gray-600 mb-6">
                        Tim kami siap membantu Anda dengan kebutuhan transportasi di Kalimantan
                    </p>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 bg-primary-blue text-white rounded-xl hover:bg-blue-700 transition-colors">
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Map Section will be here --}}

    {{-- Contact Info Section will be here --}}

    {{-- Operating Hours Section will be here --}}
@endsection