<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<!-- link css -->
<link rel="stylesheet" href="assets/style.css" />

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="container text-center text-white">
            <!-- <i data-feather="coffee"></i> -->
            <img src="assets/image/gambar2.png" class="pict" alt="foodies" />
            <h1 class="display-6">Selamat Datang, yuk makan enak!</h1>
            <p class="lead">
                Gausa mikir gemuk. Yang penting perut nyaman dan tidur nyenyak karena
                kenyang.
            </p>
            <a href="{{ route('frontend.dashboard') }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
    </div>

    <!-- End Jumbotron -->
    <!-- Content -->
    <div class="container">
        <h1 class="text-center text-black m-5 fw-medium fs-2">
            Belum ada Ide? Mulai dari sini aja dulu
        </h1>

        <!-- Menu Kategori -->
        <div class="container justify-content-center">
            <div class="row hstack gap-2">
                @foreach ($categories as $category)
                    <div class="col-md-2">
                        <div class="card rounded-2">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                class="card-img-top img-fluid p-1">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $category->name }}</h5>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Page : Aneka Kuliner Menarik -->
    <div class="container">
        <h1 class="text-center my-5">Aneka Kuliner</h1>

        <div class="row">
            <!-- Menu Ayam Bakar -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/ayambakar.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Ayam Bakar" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Ayam Bakar</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Menu Chinese -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/sushi.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Chinese Food" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Jepun Food</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Menu Seafood -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/seafood.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Seafood" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Seafood</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Menu Dissert -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/dessert.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Dissert" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Dissert</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Menu Minuman -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/minuman.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Minuman" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Minuman</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Menu Siap saji -->
            <div class="col menu-item">
                <div class="card border-0">
                    <img src="assets/image/siapsaji.png" class="card-img-top rounded-img mx-auto d-block"
                        alt="Siap Saji" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Siap Saji</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <button type="button"
                class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">
                Tampilkan kuliner lainnya
            </button>
        </div>
    </div>

    <!-- Page : Apa aja didaerahmu? -->
    <div class="container">
        <h1 class="text-center my-5">Apa aja nih yang menarik di Sukosari?</h1>
        <p class="text-center fs-5">
            Yuk cek koleksi belanjaan favorit, foodies local, baju lebaran dan penawaran
            terbaik kami di lokasimu!
        </p>

        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($products as $product)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top p-3 menu"
                            alt="{{ $product->name }}" />
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
                            {{-- <li class="list-group-item">
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                            </li> --}}
                        </ul>

                        <div class="card-body">
                            <a href="#" class="btn btn-outline-danger">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <button type="button"
            class="btn btn-outline-danger position-absolute start-50 translate-middle mt-4 rounded-pill">
            Tampilkan barang lainnya
        </button>
    </div>

    <!-- kenapa pesan disini? -->
    <div class="container text-center">
        <h1 class="text-center my-5">Kenapa pesan disini?</h1>
        <div class="row row-cols-1 row-cols-md-4">
            <!-- pasti enak -->
            <div class="col mb-4">
                <div class="card" style="background-color: #9d32ad">
                    <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium my-5 text-white">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card" style="background-color: #0096b8">
                    <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium my-5 text-white">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card" style="background-color: #d14393">
                    <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium my-5 text-white">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card" style="background-color: #d95700">
                    <img src="assets/image/enak1.png" class="card-img-top p-3 menu" alt="enak1" />
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium my-5 text-white">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->

    <!-- Footer -->
    <footer class="bg-danger text-white text-center p-3 mt-5">
        <!-- footer isinya form feedback dan social media disampingnya -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Feedback</h5>
                    <form action="">
                        <div class="mb-3">
                            <label for="feedback" class="form-label">Komentar</label>
                            <textarea class="form-control" id="feedback" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-light">Kirim</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-3"><i data-feather="facebook"></i></a>
                    <a href="#" class="text-white"><i data-feather="instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        feather.replace();
    </script>
</body>

</html>
