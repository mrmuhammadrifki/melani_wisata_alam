@extends('layouts.app')

@section('content')
    <!-- Hero Section with Parallax Effect and Transparent Overlay -->
    <section class="hero-section" style="background-image: url('{{ asset('images/wisata1.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
        <!-- Transparent Overlay -->
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
            <div class="container text-center py-5">
                <h1 class="display-4 text-shadow">Selamat datang di Wisata Alam Kami!</h1>
                <p class="lead">Jelajahi keindahan alam yang menakjubkan dan nikmati pengalaman liburan yang tidak terlupakan.</p>
                <a href="#destinasi" class="btn btn-light btn-lg shadow-sm">Lihat Destinasi Wisata</a>
            </div>
        </div>
    </section>

    <!-- Destinasi Wisata Alam -->
    <section id="destinasi" class="py-5" style="background-color: #f4f4f4;">
        <div class="container">
            <h2 class="text-center text-success mb-5">Destinasi Wisata Alam</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/wisata1.png') }}" class="card-img-top" alt="Pantai Sejahtera">
                        <div class="card-body">
                            <h5 class="card-title">Pantai Sejahtera</h5>
                            <p class="card-text">Nikmati pasir putih yang bersih dan ombak yang tenang di Pantai Sejahtera, cocok untuk liburan keluarga.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/wisata2.png') }}" class="card-img-top" alt="Gunung Sempurna">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Sempurna</h5>
                            <p class="card-text">Lakukan perjalanan trekking seru menuju puncak Gunung Sempurna dan nikmati pemandangan luar biasa.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/wisata3.png') }}" class="card-img-top" alt="Hutan Tropis">
                        <div class="card-body">
                            <h5 class="card-title">Hutan Tropis</h5>
                            <p class="card-text">Jelajahi keindahan hutan tropis yang lebat, dengan flora dan fauna yang eksotis dan menarik.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Wisata Alam -->
    <section id="fasilitas" class="py-5" style="background-color: #e9ecef;">
        <div class="container">
            <h2 class="text-center text-success mb-4">Fasilitas Wisata Alam</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Pemandu Wisata</h5>
                            <p class="card-text">Pemandu wisata kami siap membantu Anda menjelajahi alam dengan pengetahuan yang mendalam tentang destinasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Akomodasi</h5>
                            <p class="card-text">Tersedia penginapan yang nyaman dan ramah untuk menemani Anda setelah seharian menikmati wisata alam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Petualangan</h5>
                            <p class="card-text">Nikmati berbagai kegiatan petualangan seperti hiking, bersepeda, atau wisata air di sekitar kawasan wisata alam kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Foto Wisata Alam -->
    <section id="galeri" class="py-5">
        <div class="container">
            <h2 class="text-center text-success mb-4">Galeri Wisata Alam</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata1.png') }}" class="img-fluid rounded shadow-lg" alt="Pantai Sejahtera">
                    <p class="text-center mt-2">Pemandangan Pantai</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata2.png') }}" class="img-fluid rounded shadow-lg" alt="Gunung Sempurna">
                    <p class="text-center mt-2">Trekking Gunung</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/wisata3.png') }}" class="img-fluid rounded shadow-lg" alt="Hutan Tropis">
                    <p class="text-center mt-2">Eksplorasi Hutan Tropis</p>
                </div>
            </div>
        </div>
    </section>

@endsection
