@extends('layouts.app')

@section('content')
   <!-- Hero Section with Parallax Effect and Transparent Overlay -->
   <section class="hero-section" style="background-image: url('{{ asset('images/wisata2.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
    <!-- Transparent Overlay -->
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
        <div class="container text-center py-5">
            <h1 class="display-4 text-shadow">Selamat datang di Wisata Alam Kami!</h1>
            <p class="lead">Jelajahi keindahan alam yang menakjubkan dan nikmati pengalaman liburan yang tidak terlupakan.</p>
            <a href="#destinasi" class="btn btn-light btn-lg shadow-sm">Lihat Destinasi Wisata</a>
        </div>
    </div>
</section>

    <!-- Sekilas Tentang Wisata Alam -->
    <section id="tentang" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-success">Tentang Wisata Alam Kami</h2>
            <p class="text-center">Kami menghadirkan pengalaman tak terlupakan dengan wisata alam yang menawan. Jelajahi keindahan alam yang indah, dan nikmati petualangan yang memanjakan mata dan hati.</p>
        </div>
    </section>

    <!-- Destinasi Wisata Alam dengan Carousel -->
    <section id="destinasi" class="py-5">
        <div class="container">
            <h2 class="text-center text-success">Destinasi Wisata Alam</h2>
            <div id="carouselDestinasi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/wisata1.png') }}" class="d-block w-100" alt="Pantai Sejahtera">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pantai Sejahtera</h5>
                            <p>Nikmati ombak yang menenangkan di pantai yang indah ini.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/wisata2.png') }}" class="d-block w-100" alt="Gunung Sempurna">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gunung Sempurna</h5>
                            <p>Rasakan sensasi mendaki dan pemandangan indah dari puncak gunung.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/wisata3.png') }}" class="d-block w-100" alt="Hutan Tropis">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hutan Tropis</h5>
                            <p>Eksplorasi alam dengan trekking di hutan tropis yang asri.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestinasi" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDestinasi" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Galeri Foto Wisata Alam -->
    <section id="galeri" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-success">Galeri Wisata Alam</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata1.png') }}" class="img-fluid rounded shadow-lg" alt="Pantai Sejahtera">
                    <p class="text-center mt-2">Pemandangan Alam Pantai</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata2.png') }}" class="img-fluid rounded shadow-lg" alt="Gunung Sempurna">
                    <p class="text-center mt-2">Trekking di Gunung Sempurna</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata3.png') }}" class="img-fluid rounded shadow-lg" alt="Hutan Tropis">
                    <p class="text-center mt-2">Menjelajahi Hutan Tropis</p>
                </div>
            </div>
        </div>
    </section>
@endsection

