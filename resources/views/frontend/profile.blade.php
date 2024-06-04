@extends('layouts.parent')
@section('title', 'Profile')

@section('main', 'Profile')

@section('content')
    <div class="section-body">
        <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>
        <p class="section-lead">
            Change information about yourself on this page.
        </p>
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form action="{{ route('profile.update') }}" method="post" class="needs-validation">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input name="name" id="name" type="text"
                                        class="form-control @error('name') is-invalid
                                    @enderror"
                                        value="{{ auth()->user()->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Number Phone</label>
                                    <input type="text" name="phone" id="phone"
                                        class="form-control  @error('phone') is-invalid
                                    @enderror"
                                        value="{{ auth()->user()->phone }}" required="">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid
                                    @enderror"
                                        value="{{ auth()->user()->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label>Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid
                                    @enderror"
                                        value="">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
