<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KoMi</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @yield('header')
    <x-navbar />

    <div class="container mt-2">
        @yield('content')
    </div>

    <x-footer />
</body>
</html>
