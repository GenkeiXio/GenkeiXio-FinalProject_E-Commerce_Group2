@extends('Components.Layout')

@section('title', 'Cart')

@section('content')
    <h1>Your Cart</h1>
    @if(count($cart) === 0)
        <p>Your cart is empty.</p>
    @else
        <ul>
            @foreach($cart as $item)
                <li>{{ $item['name'] }} - {{ $item['price'] }} x {{ $item['quantity'] }}</li>
            @endforeach
        </ul>
    @endif
@endsection
