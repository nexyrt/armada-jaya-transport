<header x-data="{
    isOpen: false,
    scrollOpacity: 0,
    activeSection: window.location.hash || '#home',
    init() {
        window.addEventListener('scroll', () => {
            // Calculate scroll opacity (becomes more transparent as you scroll)
            const scrollPosition = window.scrollY;
            const maxScroll = 800; // Increased to 800 as requested
            
            // Linear opacity calculation
            this.scrollOpacity = Math.min(scrollPosition / maxScroll, 1);

            // Active section tracking
            const sections = document.querySelectorAll('section[id]');
            const scrollPositionWithOffset = window.scrollY + 100;

            sections.forEach(section => {
                if (section.offsetTop <= scrollPositionWithOffset && (section.offsetTop + section.offsetHeight) > scrollPositionWithOffset) {
                    this.activeSection = '#' + section.getAttribute('id');
                }
            });
        });
    },
    scrollTo(element) {
        this.isOpen = false;
        const target = document.querySelector(element);
        const header = document.querySelector('header');
        const offset = header.offsetHeight + 20;

        if (target) {
            const targetPosition = target.offsetTop - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
            this.activeSection = element;
        }
    }
}" class="fixed top-0 left-0 right-0 z-50 transition-colors duration-300"
    :class="{
        'bg-white/80': scrollOpacity < 1,
        'bg-white/30': scrollOpacity >= 1
    }"
    :style="`backdrop-filter: blur(2px);`">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <!-- Logo Section -->
            <div class="flex-shrink-0">
                <a href="#home" @click.prevent="scrollTo('#home')" class="flex items-center space-x-4 group">
                    <!-- Logo Container with enhanced animation -->
                    <div class="relative">
                        <!-- Background glow effect -->
                        <div
                            class="absolute inset-0 bg-primary-blue/20 rounded-full blur-lg transform group-hover:scale-125 transition-transform duration-500">
                        </div>

                        <!-- Logo container with gradient border -->
                        <div
                            class="relative bg-white p-2.5 rounded-full shadow-lg border-2 border-primary-blue/10 transform group-hover:scale-105 transition-all duration-300 overflow-hidden">
                            <!-- Animated gradient overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-primary-blue/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>

                            <!-- Logo image -->
                            <img src="{{ asset('favicon.png') }}" alt="Logo"
                                class="h-9 w-9 md:h-11 md:w-11 relative z-10">
                        </div>
                    </div>

                    <!-- Text Container with enhanced typography -->
                    <div class="hidden md:flex flex-col">
                        <div class="flex items-center space-x-2">
                            <span
                                class="text-xl font-bold bg-gradient-to-r from-primary-blue to-primary-dark bg-clip-text text-transparent transform group-hover:translate-x-1 transition-transform duration-300">
                                Armada Jaya
                            </span>
                            <!-- Optional decorative element -->
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary-blue/50 group-hover:scale-150 transition-transform duration-300">
                            </div>
                        </div>
                        <span
                            class="text-sm text-secondary-text font-medium tracking-wide group-hover:text-primary-blue/70 transition-colors duration-300">
                            Transport & Logistics
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                @php
                    $menu_items = [
                        ['id' => 'home', 'label' => 'Beranda'],
                        ['id' => 'layanan', 'label' => 'Layanan Kami'],
                        ['id' => 'armada', 'label' => 'Armada'],
                        ['id' => 'gallery', 'label' => 'Galeri'],
                        ['id' => 'maps', 'label' => 'Lokasi'],
                    ];
                @endphp

                @foreach ($menu_items as $item)
                    <a href="#{{ $item['id'] }}" @click.prevent="scrollTo('#{{ $item['id'] }}')"
                        class="relative px-4 py-2 rounded-full transition-all duration-300"
                        :class="{
                            'text-primary-blue bg-blue-50/50': activeSection === '#{{ $item['id'] }}',
                            'text-gray-600 hover:text-primary-blue hover:bg-blue-50/30': activeSection !== '#{{ $item['id'] }}'
                        }">
                        <span>{{ $item['label'] }}</span>
                        <div class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-primary-blue rounded-full transition-transform duration-300"
                            :class="{ 'scale-100': activeSection === '#{{ $item['id'] }}', 'scale-0': activeSection !== '#{{ $item['id'] }}' }">
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-gray-600 focus:outline-none" @click="isOpen = !isOpen">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"
                        x-show="!isOpen" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"
                        x-show="isOpen" />
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="lg:hidden absolute inset-x-0 top-full bg-white shadow-lg rounded-b-2xl">
            <div class="p-4 space-y-3">
                @foreach ($menu_items as $item)
                    <a href="#{{ $item['id'] }}" @click.prevent="scrollTo('#{{ $item['id'] }}')"
                        class="block px-4 py-2 rounded-xl transition-all duration-300"
                        :class="{
                            'text-primary-blue bg-blue-50': activeSection === '#{{ $item['id'] }}',
                            'text-gray-600 hover:text-primary-blue hover:bg-gray-50': activeSection !== '#{{ $item['id'] }}'
                        }">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</header>

@push('styles')
    <style>
        html {
            scroll-behavior: smooth;
        }

        section[id] {
            scroll-margin-top: 100px;
        }
    </style>
@endpush
