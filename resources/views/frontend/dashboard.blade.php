@extends('layouts.parent')
@section('title', 'Dashboard')

@section('main', 'Dashboard')

@section('content')
    @if (auth()->user()->name == 'admin')
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kategori</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalCategories }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Produk</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalProducts }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Users</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalUsers }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top p-3 menu"
                                style="max-height: 20rem; object-fit: contain;" alt="{{ $product->name }}" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text fs-6">
                                    Stock: {{ $product->stock }}
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pb-3">
                                    <p class="card-text fs-6">
                                        <strong>Price: Rp{{ $product->price }}</strong>
                                    </p>
                                </li>
                            </ul>
                            <div class="card-body d-flex">
                                <form action="{{ route('addCart', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning"><ion-icon
                                            name="cart-outline"></ion-icon></button>
                                </form>
                                <form action="{{route('addCartPrint', $product->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Order now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
