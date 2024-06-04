@extends('layouts.parent')

@section('title', 'Cart')

@section('main', 'Cart')

@section('content')
    <div class="container">
        <h2 class="my-4">Shopping Cart</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('cart'))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $id => $details)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $details['name'] }}</td>
                            <td>Rp{{ number_format((float) $details['price'], 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('cart.decrease', ['id' => $id]) }}"
                                    class="btn btn-sm btn-outline-secondary">-</a>
                                {{ $details['quantity'] }}
                                <a href="{{ route('cart.increase', ['id' => $id]) }}"
                                    class="btn btn-sm btn-outline-secondary">+</a>
                            </td>
                            <td>Rp{{ number_format((float) $details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="text-right">
                <a href="{{ route('print_receipt') }}" class="btn btn-primary">Checkout</a>
            </div>
        @else
            <div class="alert alert-info">Your cart is empty</div>
        @endif
    </div>
@endsection
