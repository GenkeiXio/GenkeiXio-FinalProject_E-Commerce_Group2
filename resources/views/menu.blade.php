@extends('Components.Layout')

@section('title', 'Menu')

@section('content')
    <main class="content-main">
        <section class="menu">
            <div class="menu-box">
                <!-- Breakfast Section -->
                <h2 class="bfast">Breakfast</h2>
                <div class="menu-a">
                    @foreach($menuItems as $item)
                        <div class="a-box">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
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
                            <a href="#"class="check-btn add-to-cart"data-id="{{ $item['id'] ?? '' }}"data-name="{{ $item['name'] }}"data-price="{{ $item['price'] }}">Add to Cart</a>
                        </div>
                    @endforeach
                </div>

                <!-- Lunch/Dinner Section -->
                <h2 class="bfast">Lunch/Dinner with Free Soup of the Day</h2>
                <p class="bfast">Served with Steamed Rice and Buttered Vegetables</p>
                <div class="menu-b">
                    @foreach($lunchmenuItems as $lunchitem)
                        <div class="b-box">
                            <img src="{{ asset($lunchitem['image']) }}" alt="{{ $lunchitem['name'] }}">
                            <h3>{{ $lunchitem['name'] }}</h3>
                            <div class="price">{{ $lunchitem['price'] }}</div>
                            <div class="stars">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $lunchitem['rating'])
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                            <a href="#" class="check-btn" onclick="addToCart('{{ $item['name'] }}', '{{ $item['price'] }}')">Add to Cart</a>
                        </div>
                    @endforeach
                </div>

                <!-- Drinks/Beverages Section -->
                <h2 class="bfast">Drinks/Beverages</h2>
                <div class="menu-c">
                    @foreach($drinksmenuItems as $drinksitem)
                        <div class="c-box">
                            <img src="{{ asset($drinksitem['image']) }}" alt="{{ $drinksitem['name'] }}">
                            <h3>{{ $drinksitem['name'] }}</h3>
                            <div class="price">{{ $drinksitem['price'] }}</div>
                            <div class="stars">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $drinksitem['rating'])
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                            <a href="#" class="check-btn" onclick="addToCart('{{ $item['name'] }}', '{{ $item['price'] }}')">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
@section('scripts')
    <!-- Link the addtocart.js file specifically for the menu page -->
    <script src="{{ asset('javascript/addtocart.js') }}"></script>

    <script>
        //Add to Cart logic can be placed here if needed
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const itemName = this.dataset.name;
                const itemPrice = this.dataset.price;

                //Add to Cart logic
                console.log(`Added ${itemName} - $${itemPrice} to the cart.`);
            });
        });
    </script>
@endsection
