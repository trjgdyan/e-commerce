@extends('layouts.parent')

@section('title', 'Kategori')

@section('main', 'Detail Kateogri Produk')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Data Kategori</h4>
                <button class="btn btn-primary" onclick="location.href='{{ route('product-categories.create') }}'">Tambah
                    Kategori</button>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Image</th>
                            <th scope="col">Total Produk</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td>
                                    <a href="{{ route('product-categories.show', $category) }}">{{ $category->name }}</a>
                                </td>
                                <td>
                                    {{ $category->slug }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                        height="100">
                                </td>
                                <td>
                                    {{ $category->products->count() }}
                                </td>
                                <td>
                                    <button class="btn btn-warning"
                                        onclick="location.href='{{ route('product-categories.edit', $category->id) }}'">Edit</button>
                                    <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST"
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
