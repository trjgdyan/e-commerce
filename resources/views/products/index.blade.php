@extends('layouts.parent')

@section('title', 'Product')

@section('main', 'Product')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Data Produk</h4>
                <button class="btn btn-primary" onclick="location.href='{{ route('products.create') }}'">Tambah
                    Produk</button>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        height="100">
                                </td>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->productCategory->name }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    {{ $product->stock }}
                                </td>
                                <td>
                                    <button class="btn btn-warning"
                                        onclick="location.href='{{ route('products.edit', $product->id) }}'">Edit</button>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
