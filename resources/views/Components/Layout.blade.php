<!-- resources/views/Components/Layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <header class="site-header">
            <a href="#" class="logo"> <i class="fa-solid fa-mug-hot"></i> Robiel Prince Café</a>
            <nav class="nav">
                <a href="{{ route('homepage', ['username' => $username]) }}" class="{{ request()->is('homepage/*') ? 'active' : '' }}">Home</a>
                <a href="{{ route('menu', ['username' => $username]) }}" class="{{ request()->is('menu/*') ? 'active' : '' }}">Menu</a>
                <a href="{{ route('aboutus', ['username' => $username]) }}" class="{{ request()->is('aboutus/*') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contactus', ['username' => $username]) }}" class="{{ request()->is('contactus/*') ? 'active' : '' }}">Contact Us</a>
            </nav>

            <div class="icons">
                <div class="fa-solid fa-bars" id="menu-hmbtn"></div>
                <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
                <div class="fa-solid fa-cart-shopping" id="cart-btn"></div>
                <div class="fa-solid fa-user"></div>
            </div>

            <form action="" class="search-form">
                <input type="search" id="search-box" placeholder="Search here..">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="shopping-cart">
                <h2>My Cart</h2>
                <div class="cart-box">
                    <div class="cart-content">
                    <i class="fa-solid fa-trash"></i>
                    </div>
                    <div class="checkout-btn">Check out</div>
                </div>
            </div>
        </header>
    @endif

    <main>
        <!-- This is where the content of the child views will be displayed -->
        @yield('content') <!--call the webpages to display its content-->
    </main>

    <!-- Add your footer here if needed -->
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <footer class="site-footer">
            <b>
                <p>&copy; 2024 Robiel Prince Café. All Rights Reserved.</p>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/princelouis.jaylo.1">Facebook</a></li>
                    <li><a href="https://www.instagram.com/genkeiyoshi/">Instagram</a></li>
                    <li><a href="https://x.com/LouisJaylo">Twitter</a></li>
                </ul>
            </b>
        </footer>
    @endif

    <script src="{{ asset('javascript/addtocart.js') }}"></script>
</body>
</html>
