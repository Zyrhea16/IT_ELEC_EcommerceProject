<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Zyrhea' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">
    @livewire('partials.navbar')

    <main>
        {{ $slot }}
    </main>

    @livewire('partials.footer')

    @livewireScripts

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Livewire Alert Scripts -->
    @livewireAlertScripts

    <!-- Preline UI JS - REQUIRED for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/preline@2.0.3/dist/preline.js"></script>

    <!-- Initialize Preline Components -->
    <script>
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof HSStaticMethods !== 'undefined') {
                HSStaticMethods.autoInit();
            }
        });

        // Reinitialize after Livewire navigation (for wire:navigate links)
        document.addEventListener('livewire:navigated', () => {
            if (typeof HSStaticMethods !== 'undefined') {
                HSStaticMethods.autoInit();
            }
        });

        // Livewire v3 initialized event
        document.addEventListener('livewire:initialized', () => {
            if (typeof HSStaticMethods !== 'undefined') {
                HSStaticMethods.autoInit();
            }
        });
    </script>

    @stack('scripts')
</body>

</html>