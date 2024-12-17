@extends('Components.Layout')

@section('title', 'Home Page')

@section('content')
    <section class="hero">
        <div class="home-bg-blur"></div>
        <div class="home-content">
            <h1>Welcome to Robiel Prince Café {{ $username }}!</h1>
            <h2>Where every bite is a <span>little joy.</span></h2>
            <p>Savor light meals, delightful snacks, and a cozy atmosphere crafted just for you.</p>
        </div>
    </section>

    <section class="home-heading">
        <div class="heading">Our <span>Features</span></div> 
        <div class="feature">
            <div class="feature-box">
                <img src="{{ asset('css/bfast.jpg') }}" alt="">
                <h3>Morning Delights & Snack Staples</h3>
                <p>Start your day with our comforting breakfast classics or enjoy a quick snack.</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('css/lunch.jpg') }}" alt="">
                <h3>Delicious Meals & Free Soup</h3>
                <p>Enjoy our fresh, flavorful lunch and dinner options with complimentary soup.</p>
            </div>
            <div class="feature-box">
                <img src="{{ asset('css/drinks.jpg') }}" alt="">
                <h3>Refreshing Drinks & Beverages</h3>
                <p>From energizing coffees to refreshing smoothies, we’ve got something for you.</p>
            </div>
        </div>
    </section>

    <section class="best-seller">
        <div class="heading">Our <span>Best Seller</span></div> 
        <div class="seller-box">
            <div class="first-section">
                @foreach($bestSellers as $item)
                    <div class="firstsection-box">
                        <img src="{{ asset($item['image']) }}" alt="">
                        <h3>{{ $item['name'] }}</h3>
                        <div class="price">{{ $item['price'] }}</div>
                        <div class="stars">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $item['rating'])
                                    <i class="fa-solid fa-star"></i>
                                @else
                                    <i class="fa-regular fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <a href="#" class="check-btn">Buy</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection