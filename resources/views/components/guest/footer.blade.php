<footer class="bg-gray-800 text-black mt-auto">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">{{ config('app.name') }}</h3>
                <p class="mb-2">Jl. Nama Jalan No. XX</p>
                <p class="mb-2">Kota, Provinsi</p>
                <p class="mb-2">Telp: 0812-3456-7890</p>
                <p>Email: info@armadajaya.com</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Layanan Kami</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.lepas-kunci') }}" class="hover:text-blue-400">Rental Lepas Kunci</a>
                    </li>
                    <li><a href="{{ route('services.carter-dalam') }}" class="hover:text-blue-400">Carter Dalam Kota</a>
                    </li>
                    <li><a href="{{ route('services.carter-luar') }}" class="hover:text-blue-400">Carter Luar Kota</a>
                    </li>
                    <li><a href="{{ route('services.regular') }}" class="hover:text-blue-400">Regular</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400">
                        <!-- You can add social media icons here -->
                        Facebook
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        Instagram
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-4 border-t border-gray-700 text-center">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
