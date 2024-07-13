@extends('layout.app')

@section('title', 'Welcome Rara!')
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

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
            <!-- Kategori -->
            <div class="col">
                <div class="card border-0 rounded-pill position-relative overflow-hidden"
                    style="width: 100%; height: 100px;">
                    <img src="{{ asset('assets/gambar/fashion.png') }}" class="card-img rounded-pill" alt="Fashion"
                        style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title text-white">Fashion</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 rounded-pill position-relative overflow-hidden"
                    style="width: 100%; height: 100px;">
                    <img src="{{ asset('assets/gambar/lips.png') }}" class="card-img rounded-pill" alt="Kecantikan"
                        style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title text-white">Kecantikan</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 rounded-pill position-relative overflow-hidden"
                    style="width: 100%; height: 100px;">
                    <img src="{{ asset('assets/gambar/cincin.png') }}" class="card-img rounded-pill" alt="Perhiasan"
                        style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title text-white">Perhiasan</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 rounded-pill position-relative overflow-hidden"
                    style="width: 100%; height: 100px;">
                    <img src="{{ asset('assets/gambar/tumbler.png') }}" class="card-img rounded-pill" alt="Perabotan"
                        style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title text-white">Perabotan</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 rounded-pill position-relative overflow-hidden"
                    style="width: 100%; height: 100px;">
                    <img src="{{ asset('assets/gambar/elektronik.png') }}" class="card-img rounded-pill" alt="Elektronik"
                        style="object-fit: cover; width: 100%; height: 100%;">
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <h5 class="card-title text-white">Elektronik</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <h5 class="mr-auto">Produk Unggulan</h5>
        <a href="#" class="nav-link">
            <span>All Prodct</span>
            <ion-icon name="arrow-forward-outline" style="color:black"></ion-icon>
        </a>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-8 g-3">
        <!-- Produk 1 -->
        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/kurama.jpg') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Kurama Goreng</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/20.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Jus Orange</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/21.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Kotak Penyimpanan</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/28.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Jam Tangan</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/30.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">One set korea style</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/31.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Pashmina Kain</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/32.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Paket Lengkap Gap Boi</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-0 position-relative overflow-hidden">
                <img src="{{ asset('assets/gambar/33.png') }}" class="card-img-top" alt="Kecantikan"
                    style="height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Earphone Wireless</h5>
                    <p class="card-text">Rp100.000</p>
                    <button type="button" class="btn btn-primary">Add to cart</button>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>





    </div>









    {{-- end main  --}}
@endsection
