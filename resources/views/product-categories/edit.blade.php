@extends('layouts.parent')

@section('title', 'Edit Data Kategori')

@section('main', 'Kategori Produk')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Produk</h4>
            </div>


            <div class="card-body">
                <form action="{{ route('product-categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid

                        @enderror" name="name"
                            placeholder="Tulis Nama Produk" value="{{ old('name') ?? $category->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text"
                            class="form-control @error('slug') is-invalid

                        @enderror" name="slug"
                            placeholder="Slug" value="{{ old('slug') ?? $category->slug }}">
                        @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Save</button>
                        <button class="btn btn-primary" onclick="location.href='{{ route('product-categories.index') }}'"
                            type="button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
