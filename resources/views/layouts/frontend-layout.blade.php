<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SKPS School/College</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend/mail/contact.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
