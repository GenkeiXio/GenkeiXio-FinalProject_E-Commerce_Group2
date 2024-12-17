<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restricted-Area</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    @include('Components.Layout')
    <div class="restricted-main">
        <div class="restricted-page">
            <h1>Welcome, {{ $username }}, to our restricted page.</h1>
        </div>
    </div>
    <!-- Prevent the footer from showing -->
    @php
    $hideFooter = true;
    @endphp
</body>
</html>