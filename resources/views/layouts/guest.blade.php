<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="icon" href="{{ asset('favicon.png') }}">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen bg-gray-100">
        @include('components.guest.header')

        <main>
            @yield('content')
        </main>

        @include('components.guest.footer')

        <script>
            document.addEventListener('keydown', (e) => {
                if (!window.Alpine) return;

                // Get all elements with x-data that contain showModal
                const galleryElements = document.querySelectorAll('[x-data*="showModal"]');

                galleryElements.forEach(element => {
                    const gallery = element.__x.$data;

                    if (!gallery || !gallery.showModal) return;

                    if (e.key === 'Escape') {
                        gallery.showModal = false;
                    } else if (e.key === 'ArrowLeft' && typeof gallery.prevImage === 'function') {
                        gallery.prevImage();
                    } else if (e.key === 'ArrowRight' && typeof gallery.nextImage === 'function') {
                        gallery.nextImage();
                    }
                });
            });
        </script>
    </body>

</html>
