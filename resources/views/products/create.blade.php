@extends('layouts.parent')

@section('title', 'Product')

@section('main', 'Product')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Produk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid
                        @enderror"
                            name="name" placeholder="Tulis Nama Produk" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select
                            class="form-control @error('product_category_id')
                        is-invalid
                        @enderror"
                            name="product_category_id" value="{{ old('product_category_id') }}">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                            @error('product_category_id')
                                <div class="alert
                            alert-danger">{{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>




                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text"
                            class="form-control @error('price') is-invalid

                        @enderror"
                            name="price" placeholder="Harga Produk"value="{{ old('price') }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text"
                            class="form-control @error('stock') is-invalid

                        @enderror"
                            name="stock" placeholder="Stok Produk" value="{{ old('stock') }}">
                        @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file"
                            class="form-control @error('image') is-invalid

                        @enderror"
                            name="image" placeholder="Stok Produk" value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-primary" type="reset">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
