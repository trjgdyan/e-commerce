@extends('layouts.parent')

@section('title', 'Kategori Produk')

@section('main', 'Data Kategori Produk')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Produk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('product-categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid
                        @enderror"
                            name="name" placeholder="Tulis Nama Kategori" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                            class="form-control @error('slug') is-invalid

                        @enderror" name="slug"
                            placeholder="Slug"value="{{ old('slug') }}">
                        @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file"
                            class="form-control @error('image') is-invalid

                        @enderror"
                            name="image" placeholder="Foto Kategori" value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
