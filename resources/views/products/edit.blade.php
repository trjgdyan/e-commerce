@extends('layouts.parent')

@section('title', 'Edit Product')

@section('main', 'Product')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Produk</h4>
            </div>


            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid

                        @enderror" name="name"
                            placeholder="Tulis Nama Produk" value="{{ old('name') ?? $product->name }}">
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
                            name="product_category_id">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($category->id == $product->product_category_id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach

                            @error('product_category_id')
                                <div class="alert
                            alert-danger">{{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>

                    <div class="form-group ">
                        <label>Harga</label>
                        <input type="text"
                            class="form-control @error('price') is-invalid

                        @enderror"
                            name="price" placeholder="Harga Produk" value="{{ old('price') ?? $product->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text"
                            class="form-control @error('stock') is-invalid

                        @enderror"
                            name="stock" placeholder="Stok Produk" value="{{ old('stock') ?? $product->stock }}">
                        @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file"
                            class="form-control @error('image') is-invalid

                        @enderror"
                            name="image" placeholder="Foto Produk" value="{{ old('image') ?? $product->image }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Save</button>
                        <button class="btn btn-primary" onclick="location.href='{{ route('products.index') }}'"
                            type="button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
