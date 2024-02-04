<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gaushala Multiple Campus') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('back/assets/images/brand-logo.png') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/core/libs.min.css') }}" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/aos/dist/aos.css') }}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/hope-ui.min.css?v=1.2.0') }}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/custom.min.css?v=1.2.0') }}'" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/customizer.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="icon" type="image/x-icon" href="{{ asset('front/images/favicon.png') }}">
    @vite(['resources/js/app.js'])
    @stack('css')
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        @include('layouts.aside')
        <main class="main-content mt-2 h-100 overflow-scroll">
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('back/assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/core/external.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/charts/widgetcharts.js') }}"></script>
    <script src="{{ asset('back/assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('back/assets/js/charts/dashboard.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins/fslightbox.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins/slider-tabs.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins/form-wizard.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('back/assets/js/hope-ui.js') }}" defer></script>
    <script>
        function preview() {
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    @stack('modals')
    @livewireScripts
    @stack('js')
</body>

</html>
