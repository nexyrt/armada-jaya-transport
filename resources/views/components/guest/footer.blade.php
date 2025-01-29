@php
    $routes = config('navigation.routes');
@endphp

<footer class="bg-primary-dark mt-20">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Company Info - 4 columns -->
            <div class="md:col-span-4">
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
                    Menyediakan layanan transportasi yang aman, nyaman, dan terpercaya untuk berbagai kebutuhan perjalanan Anda.
                </p>
                <div class="border-t border-gray-700 pt-6">
                    <h4 class="text-white font-semibold mb-4">Jam Operasional</h4>
                    <div class="space-y-2 text-gray-400">
                        <table>
                            <tr>
                                <td>Senin</td>
                                <td>:</td>
                                <td>Buka 24 Jam</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quick Links - 3 columns -->
            <div class="md:col-span-3">
                <h3 class="text-white text-lg font-semibold mb-6">Layanan Kami</h3>
                <div class="space-y-3">
                    @foreach($routes as $route)
                        <a href="{{ route($route['name']) }}" 
                           class="block text-gray-400 hover:text-primary-blue transition-colors duration-300">
                            {{ $route['label'] }}
                        </a>
                    @endforeach
                </div>
                <div class="mt-8">
                    <h4 class="text-white font-semibold mb-4">Area Layanan</h4>
                    <div class="space-y-2 text-gray-400">
                        <p>Yogyakarta</p>
                        <p>Sleman</p>
                        <p>Bantul</p>
                        <p>Kulon Progo</p>
                    </div>
                </div>
            </div>

            <!-- Info & Features - 3 columns -->
            <div class="md:col-span-3">
                <h3 class="text-white text-lg font-semibold mb-6">Informasi</h3>
                <div class="space-y-3">
                    <a href="#" class="block text-gray-400 hover:text-primary-blue transition-colors duration-300">Syarat & Ketentuan</a>
                    <a href="#" class="block text-gray-400 hover:text-primary-blue transition-colors duration-300">Kebijakan Privasi</a>
                    <a href="#" class="block text-gray-400 hover:text-primary-blue transition-colors duration-300">FAQ</a>
                    <a href="#" class="block text-gray-400 hover:text-primary-blue transition-colors duration-300">Cara Pemesanan</a>
                </div>
                <div class="mt-8">
                    <h4 class="text-white font-semibold mb-4">Keunggulan</h4>
                    <div class="space-y-2 text-gray-400">
                        <p>✓ Armada Terawat</p>
                        <p>✓ Sopir Profesional</p>
                        <p>✓ Harga Bersaing</p>
                        <p>✓ Pelayanan 24/7</p>
                    </div>
                </div>
            </div>

            <!-- Contact Info - 2 columns -->
            <div class="md:col-span-2">
                <h3 class="text-white text-lg font-semibold mb-6">Hubungi Kami</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-white font-medium mb-2">Alamat:</p>
                        <p class="text-gray-400">Jl. Nama Jalan No. XX<br>Kota, Provinsi</p>
                    </div>
                    <div>
                        <p class="text-white font-medium mb-2">Telepon:</p>
                        <p class="text-gray-400">0812-3456-7890</p>
                    </div>
                    <div>
                        <p class="text-white font-medium mb-2">Email:</p>
                        <p class="text-gray-400">info@armadajaya.com</p>
                    </div>
                </div>
                <div class="mt-8">
                    <h4 class="text-white font-semibold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-700 hover:bg-primary-blue transition-all duration-300 rounded-full p-2.5">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-primary-blue transition-all duration-300 rounded-full p-2.5">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-primary-blue transition-all duration-300 rounded-full p-2.5">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500">
                    &copy; {{ date('Y') }} Armada Jaya Transport. All rights reserved.
                </p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-400">Terms</a>
                    <a href="#" class="text-gray-500 hover:text-gray-400">Privacy</a>
                    <a href="#" class="text-gray-500 hover:text-gray-400">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer>