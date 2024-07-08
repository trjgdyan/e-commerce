@extends('layout.app')

@section('title', 'Dashboard')
@section('content')
    {{-- main  --}}


    <div class="card-body bg-light rounded-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-start pt-5">
                    <h1>Best Shop Experience!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ut voluptatum odit vel consectetur non
                        dolores hic, alias laboriosam eveniet blanditiis, qui quo quibusdam veniam temporibus. Earum
                        consectetur nulla aliquid.</p>
                </div>
                <div class="col-md-6 text-end d-flex justify-content-end">
                    <img src="{{ asset('assets/gambar/ecommerce.png') }}" alt="ecommerce image" class="img-fluid mr-5 rounded"
                        width="250" height="250">
                </div>
            </div>
        </div>
    </div>

    <div class="my-3">
        <div class="d-flex">
            <h5 class="mr-auto">Kategori</h5>
            <a href="#" class="nav-link">
                <span>All Category</span>
                <ion-icon name="arrow-forward-outline" style="color:black"></ion-icon>
            </a>
        </div>

        <div class="row">

            <!-- Kategori -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="{{ asset('assets/gambar/fashion.png') }}" class="card-img-top rounded-img mx-auto d-block"
                        alt="Chinese Food" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Fashion</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col menu-item">
                <div class="card border-0">
                    <img src="{{ asset('assets/gambar/lips.png') }}" class="card-img-top rounded-img mx-auto d-block"
                        alt="Seafood" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Kecantikan</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col menu-item">
                <div class="card border-0">
                    <img src="{{ asset('assets/gambar/cincin.png') }}" class="card-img-top rounded-img mx-auto d-block"
                        alt="Dissert" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Perhiasan</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col menu-item">
                <div class="card border-0">
                    <img src="{{ asset('assets/gambar/tumbler.png') }}" class="card-img-top rounded-img mx-auto d-block"
                        alt="Minuman" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Tupperware</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>


            <div class="col menu-item">
                <div class="card border-0">
                    <img src="{{ asset('assets/gambar/elektronik.png') }}" class="card-img-top rounded-img mx-auto d-block"
                        alt="Siap Saji" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Elektronik</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="my-3">
        <div class="d-flex">
            <h5 class="mr-auto">Produk</h5>

        </div>
    </div>







    {{-- end main  --}}
@endsection
